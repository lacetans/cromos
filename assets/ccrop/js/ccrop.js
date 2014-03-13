// VARIABLES GLOBALS
var cfile = "" // arxiu pujat
var cimg = new Image(); // imatge carregada
var ccrd = []; // cordenades imatge carregada i els retalls d'aquesta
ccrd[0] = [], ccrd[1] = [], ccrd[2] = [], ccrd[3] = [], ccrd[4] = [];
var cmode = 0; // mode de captura 0(individual) 1(dividit)
var cnum = 4; // nombre de cromos 1-4
var cind = 1; // index dels cromos 1-4 (cromos finalitzats 5)
var cdrop = document.getElementById('cc_drop'); // div on s'arrosega la imatge
var cnvs = document.getElementById('cc_canvas'); // canvas per previsualitzar
var ctx = cnvs.getContext("2d"); // context per a dibuixar en el canvas
var cinf = document.getElementById('cc_info'); // informació en els controls
cinf.innerHTML = "benvingut al sistema de creació de cromos"; // missatge a mostrar per informar
del_cromo(0);
draw_canvas();

// ARROSEGAR EL FITXER DE LA IMATGE
cdrop.ondragover = function () {
  this.className = "hover";
  return false;
};
cdrop.ondragend = function () {
  this.className = "";
  return false;
};
cdrop.ondrop = function (e) {
  this.className = "";
  e.preventDefault();
  cfile = e.dataTransfer.files[0];
  load_file();
};

// SELECCIONAR EL FITXER DE LA IMATGE
function sel_file(t){
  cfile = t.files[0];
  load_file();
}

// CARREGAR EL FITXER DE LA IMATGE
function load_file(){
  if(cfile.type!="image/jpg" && cfile.type!="image/jpeg" && cfile.type!="image/png" && cfile.type!="image/gif"){
    cinf.innerHTML = "ERROR: el format de l'arxiu es incorrecte: " + cfile.type;
  }else{
    var url = window.URL || window.webkitURL;
    cimg.src = url.createObjectURL(cfile);
    cimg.onload = function(){
      cdrop.innerHTML = "";
      cdrop.style.backgroundImage = 'url(' + this.src + ')';
      document.getElementById("cc_img").src = this.src;
      cind = 1;
      size_sel();
    }
    return false;
  }
}

// CANVIAR LES COORDENADES ACTUALS
function img_coord(img, selection) {
  if (!selection.width || !selection.height) return;
  ccrd[0]["x"] = parseInt(selection.x1*cimg.width/$("#cc_img").width());
  ccrd[0]["y"] = parseInt(selection.y1*cimg.height/$("#cc_img").height());
  ccrd[0]["w"] = parseInt(selection.width*cimg.width/$("#cc_img").width());
  ccrd[0]["h"] = parseInt(selection.height*cimg.height/$("#cc_img").height());
  cinf.innerHTML = "image width="+cimg.width+" image height="+cimg.height+" crop x="+ccrd[0]["x"]+" crop y="+ccrd[0]["y"]+" crop width="+ccrd[0]["w"]+" crop height="+ccrd[0]["h"];
  save_coord();
  draw_canvas();
}

// GUARDAR COORDENADES A LA POSICIÓ DEL CROMO
function save_coord(){
  if(cind<5){
    if(cmode==0){
      ccrd[cind]["x"] = ccrd[0]["x"];
      ccrd[cind]["y"] = ccrd[0]["y"];
      ccrd[cind]["w"] = ccrd[0]["w"];
      ccrd[cind]["h"] = ccrd[0]["h"];
    }else{
      if(cnum==2){
        ccrd[1]["x"] = ccrd[0]["x"];
        ccrd[1]["y"] = ccrd[0]["y"];
        ccrd[1]["w"] = ccrd[0]["w"]/2;
        ccrd[1]["h"] = ccrd[0]["h"];
        ccrd[2]["x"] = ccrd[1]["x"]+ccrd[1]["w"];
        ccrd[2]["y"] = ccrd[1]["y"];
        ccrd[2]["w"] = ccrd[1]["w"];
        ccrd[2]["h"] = ccrd[1]["h"];
      }else{
        ccrd[1]["x"] = ccrd[0]["x"];
        ccrd[1]["y"] = ccrd[0]["y"];
        ccrd[1]["w"] = ccrd[0]["w"]/2;
        ccrd[1]["h"] = ccrd[0]["h"]/2;
        ccrd[2]["x"] = ccrd[1]["x"]+ccrd[1]["w"];
        ccrd[2]["y"] = ccrd[1]["y"];
        ccrd[2]["w"] = ccrd[1]["w"];
        ccrd[2]["h"] = ccrd[1]["h"];
        ccrd[3]["x"] = ccrd[1]["x"];
        ccrd[3]["y"] = ccrd[1]["y"]+ccrd[1]["h"];
        ccrd[3]["w"] = ccrd[1]["w"];
        ccrd[3]["h"] = ccrd[1]["h"];
        ccrd[4]["x"] = ccrd[1]["x"]+ccrd[1]["w"];
        ccrd[4]["y"] = ccrd[1]["y"]+ccrd[1]["h"];
        ccrd[4]["w"] = ccrd[1]["w"];
        ccrd[4]["h"] = ccrd[1]["h"];
      }
    }
  }
}

// DIBUIXAR COORDENADES DE LA IMATGE AL CANVAS
function draw_canvas(){
  ctx.fillStyle = "rgba(223,223,223,1)";
  ctx.fillRect(0,0,600,800);
  if(ccrd[1]["w"]!=0){
    ctx.drawImage(cimg,ccrd[1]["x"],ccrd[1]["y"],ccrd[1]["w"],ccrd[1]["h"],0,0,300,400);
  }
  if(ccrd[2]["w"]!=0){
    ctx.drawImage(cimg,ccrd[2]["x"],ccrd[2]["y"],ccrd[2]["w"],ccrd[2]["h"],300,0,300,400);
  }
  if(ccrd[3]["w"]!=0){
    ctx.drawImage(cimg,ccrd[3]["x"],ccrd[3]["y"],ccrd[3]["w"],ccrd[3]["h"],0,400,300,400);
  }
  if(ccrd[4]["w"]!=0){
    ctx.drawImage(cimg,ccrd[4]["x"],ccrd[4]["y"],ccrd[4]["w"],ccrd[4]["h"],300,400,300,400);
  }
  if($('#cc_plin').prop('checked')){
    ctx.strokeStyle='#f00';
    ctx.lineWidth=1;
    ctx.beginPath();
    ctx.moveTo(299.5,0);
    ctx.lineTo(299.5,800);
    ctx.moveTo(0,399.5);
    ctx.lineTo(600,399.5);
    ctx.moveTo(0,0);
    ctx.stroke();
  }
}

// CANVIAR EL MODE DE CAPTURAR ELS CROMOS
function next_mode(){
  var check = $("#cc_mode").html();
  if(check == "individual"){
    $("#cc_mode").html("dividit");
    cmode = 1;
  }else{
    $("#cc_mode").html("individual");
    cmode = 0;
  }
  next_num();
}

// CANVIAR EL NOMBRE DE CROMOS A CAPTURAR
function next_num(){
  while(true){
    var check = $("#cc_num").html();
    if(check == "4"){
      $("#cc_num").html("1");
      cnum = 1;
    }else if(check == "1"){
      $("#cc_num").html("2");
      cnum = 2;
    }else if(check == "2"){
      $("#cc_num").html("3");
      cnum = 3;
    }else{
      $("#cc_num").html("4");
      cnum = 4;
    }
    if(cmode==0 || (cmode==1 && (cnum==2 || cnum==4))){
      break;
    }
  }
  size_sel();
  del_cromo(0,false);
}

// MIDA DE LA SELECCIÓ DE LA IMATGE
function size_sel(){
  if(cfile!=""){
    del_cromo(0);
    var ss_x1 = 0;
    var ss_x2 = 0;
    var ss_y1 = ($("#cc_img").height()-100)/2;
    var ss_y2 = (($("#cc_img").height()-100)/2)+100;
    if(cmode==1 && cnum==2){
      ss_x1 = ($("#cc_img").width()-150)/2;
      ss_x2 = (($("#cc_img").width()-150)/2)+150;
      ias = $('#cc_img').imgAreaSelect({ aspectRatio: '1.5:1', handles: false, fadeSpeed: 200, onSelectChange: img_coord, instance: true });
      if (!ias.getSelection().width){
        ias.setOptions({show:true,x1:$("#cc_img").width()/2,y1:$("#cc_img").height()/2,x2:$("#cc_img").width()/2,y2:$("#cc_img").height()/2});
      }
      ias.animateSelection(ss_x1, ss_y1, ss_x2, ss_y2, 'slow');
    }else{
      ss_x1 = ($("#cc_img").width()-75)/2;
      ss_x2 = (($("#cc_img").width()-75)/2)+75;
      ias = $('#cc_img').imgAreaSelect({ aspectRatio: '0.75:1', handles: false, fadeSpeed: 200, onSelectChange: img_coord, instance: true });
      if (!ias.getSelection().width){
        ias.setOptions({show:true,x1:$("#cc_img").width()/2,y1:$("#cc_img").height()/2,x2:$("#cc_img").width()/2,y2:$("#cc_img").height()/2});
      }
      ias.animateSelection(ss_x1, ss_y1, ss_x2, ss_y2, 'slow');
    }
    ccrd[0]["x"] = parseInt(ss_x1*cimg.width/$("#cc_img").width());
    ccrd[0]["y"] = parseInt(ss_y1*cimg.height/$("#cc_img").height());
    ccrd[0]["w"] = parseInt((ss_x2-ss_x1)*cimg.width/$("#cc_img").width());
    ccrd[0]["h"] = parseInt((ss_y2-ss_y1)*cimg.height/$("#cc_img").height());
    cinf.innerHTML = "image width="+cimg.width+" image height="+cimg.height+" crop x="+ccrd[0]["x"]+" crop y="+ccrd[0]["y"]+" crop width="+ccrd[0]["w"]+" crop height="+ccrd[0]["h"];
    save_coord();
    draw_canvas();
  }
}

// CAPTURAR EL SEGUENT CROMO
function next_cromo(){
  if(cmode==0){
    if(cind < cnum){
      cinf.innerHTML = "S'ha guardat les coordenades el cromo " + cind;
      cind += 1;
      save_coord();
      draw_canvas();
    }else{
      cinf.innerHTML = "S'han guardat les coordenades de tots els cromos";
      cind = 5;
    }
  }else{
    cinf.innerHTML = "S'han guardat les coordenades de tots els cromos";
    cind = 5;
  }
  if(cind==5 && $('#cc_asave').prop('checked')){
    save_cromo();
  }
}

// BORRAR COORDENADES DELS CROMOS
function del_cromo(n,draw=true){
  if(n==0){
    for (var i = 1; i <= 4; i++) {
      ccrd[i]["x"] = 0;
      ccrd[i]["y"] = 0;
      ccrd[i]["w"] = 0;
      ccrd[i]["h"] = 0;
    };
    cind = 1;
    save_coord();
  }else if(n<cind && cmode==0){
    ccrd[n]["x"] = 0;
    ccrd[n]["y"] = 0;
    ccrd[n]["w"] = 0;
    ccrd[n]["h"] = 0;
    for (var i = n; i < cnum; i++){
      ccrd[i]["x"] = ccrd[i+1]["x"];
      ccrd[i]["y"] = ccrd[i+1]["y"];
      ccrd[i]["w"] = ccrd[i+1]["w"];
      ccrd[i]["h"] = ccrd[i+1]["h"];
    };
    if(cind==5){
      cind = cnum;
    }else{
      cind -= 1;
    }
    for (var i = cind; i <= 4; i++){
      ccrd[i]["x"] = 0;
      ccrd[i]["y"] = 0;
      ccrd[i]["w"] = 0;
      ccrd[i]["h"] = 0;
    }
    save_coord()
    cinf.innerHTML = "borrar como numero " + n;
  }else{
    cinf.innerHTML = "Opció no vàlida";
  }
  if(draw){
    draw_canvas();
  }
}

// EVIAR FITXER I COORDENADES AL SERVIDOR
function save_cromo(){
  if(cfile==""){
    cinf.innerHTML = "carrega una imatge i crea els cromos avanç de guardar";
  }else if(cind==6){
    cinf.innerHTML = "ja s'han guardat els cromos al servidor";
  }else if(cind!=5){
    cinf.innerHTML = "acava els cromos avanç de guardar";
  }else{
    cinf.innerHTML = "guardant informació a la base de dades ...";
    alta_cromos();
    setTimeout(function(){
      var fd = new FormData();
      fd.append('file', cfile);
      fd.append('a', $("#cc_ida0").html());
      fd.append('c1', $("#cc_idc1").html());
      fd.append('x1', ccrd[1]["x"]);
      fd.append('y1', ccrd[1]["y"]);
      fd.append('w1', ccrd[1]["w"]);
      fd.append('h1', ccrd[1]["h"]);
      fd.append('c2', $("#cc_idc2").html());
      fd.append('x2', ccrd[2]["x"]);
      fd.append('y2', ccrd[2]["y"]);
      fd.append('w2', ccrd[2]["w"]);
      fd.append('h2', ccrd[2]["h"]);
      fd.append('c3', $("#cc_idc3").html());
      fd.append('x3', ccrd[3]["x"]);
      fd.append('y3', ccrd[3]["y"]);
      fd.append('w3', ccrd[3]["w"]);
      fd.append('h3', ccrd[3]["h"]);
      fd.append('c4', $("#cc_idc4").html());
      fd.append('x4', ccrd[4]["x"]);
      fd.append('y4', ccrd[4]["y"]);
      fd.append('w4', ccrd[4]["w"]);
      fd.append('h4', ccrd[4]["h"]);
      cinf.innerHTML = "pujant imatge i dades al servidor ...";
      $.ajax({
        url: "/m07uf3/cromos/assets/ccrop/php/ccrop.php",
        type: "POST",
        data: fd,
        contentType:false,
        processData: false,
        cache: false,
        success: function(data){
          document.getElementById("cc_test").innerHTML = data;
          cinf.innerHTML = "imatge i dades pujades al servidor";
        }
      });
      cind = 6;
    },150);
  }
}

// MOSTRAT O AMAGAR ELS BOTONS I DESCRIPCIONS (no s'utilitza)
function check_btn(){
    $("#cc_nexts").css("display","inline-block");
    $("#cc_next").css("display","inline-block");
    $("#cc_nexts").css("display","none");
    $("#cc_next").css("display","none");
}

// BOTONS DEL CONROLS
$('#cc_file').on('change',function(){
  sel_file(this);
});

$("#cc_mode").click(function(){
  next_mode();
});

$("#cc_num").click(function(){
  next_num();
});

$("#cc_next").click(function(){
  next_cromo();
});

$("#cc_save").click(function(){
  save_cromo()
});

$("#cc_del0").click(function(){
  del_cromo(0);
});

$("#cc_del1").click(function(){
  del_cromo(1);
});

$("#cc_del2").click(function(){
  del_cromo(2);
});

$("#cc_del3").click(function(){
  del_cromo(3);
});

$("#cc_del4").click(function(){
  del_cromo(4);
});

$("#cc_plin").click(function(){
  draw_canvas();
});

// AMPLIACIÓ FUNCIONS imgAreaSelect
$.extend($.imgAreaSelect.prototype, {
    animateSelection: function (x1, y1, x2, y2, duration) {
        var fx = $.extend($('<div/>')[0], {
            ias: this,
            start: this.getSelection(),
            end: { x1: x1, y1: y1, x2: x2, y2: y2 }
        });

        $(fx).animate({
            cur: 1
        },
        {
            duration: duration,
            step: function (now, fx) {
                var start = fx.elem.start, end = fx.elem.end,
                    curX1 = Math.round(start.x1 + (end.x1 - start.x1) * now),
                    curY1 = Math.round(start.y1 + (end.y1 - start.y1) * now),
                    curX2 = Math.round(start.x2 + (end.x2 - start.x2) * now),
                    curY2 = Math.round(start.y2 + (end.y2 - start.y2) * now);
                fx.elem.ias.setSelection(curX1, curY1, curX2, curY2);
                fx.elem.ias.update();
            }
        });
    }
});