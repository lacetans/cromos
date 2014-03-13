<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // carpeta on guardar les imatges
    $ruta = "./cromos/".$_POST['a'];
    if(chdir("/var/www/dades")){
      if(!file_exists($ruta)){
        mkdir($ruta,0777,true);
      }
    }else{
      echo "No s'ha pogut canviar la carpeta de treball";
      exit;
    }

    // variables de la imatge
    $img_w = 600; // height
    $img_h = 800; // width
    $img_q = 90;  // quality
    
    // Crear la imatge del fitxer
    if($_FILES['file']['type']=="image/jpeg"){
      $img_f = imagecreatefromjpeg($_FILES['file']['tmp_name']);
    }else if($_FILES['file']['type']=="image/gif"){
      $img_f = imagecreatefromgif($_FILES['file']['tmp_name']);
    }else if($_FILES['file']['type']=="image/png"){
      $img_f = imagecreatefrompng($_FILES['file']['tmp_name']);
    }else{
      echo "Format de la imatge no acceptat";
      exit;
    }

    // Crear imatges cromos
    if($_POST['w1']!=0 && $_POST['h1']!=0){
      $img_r = ImageCreateTrueColor( $img_w, $img_h );
      imagecopyresampled($img_r,$img_f,0,0,$_POST['x1'],$_POST['y1'],$img_w,$img_h,$_POST['w1'],$_POST['h1']);
      imagejpeg($img_r,$ruta."/".$_POST['c1'].".jpg",$img_q);
      imagedestroy($img_r); // Alliberar memoria
    }
    if($_POST['w2']!=0 && $_POST['h2']!=0){
      $img_r = ImageCreateTrueColor( $img_w, $img_h );
      imagecopyresampled($img_r,$img_f,0,0,$_POST['x2'],$_POST['y2'],$img_w,$img_h,$_POST['w2'],$_POST['h2']);
      imagejpeg($img_r,$ruta."/".$_POST['c2'].".jpg",$img_q);
      imagedestroy($img_r); // Alliberar memoria
    }
    if($_POST['w3']!=0 && $_POST['h3']!=0){
      $img_r = ImageCreateTrueColor( $img_w, $img_h );
      imagecopyresampled($img_r,$img_f,0,0,$_POST['x3'],$_POST['y3'],$img_w,$img_h,$_POST['w3'],$_POST['h3']);
      imagejpeg($img_r,$ruta."/".$_POST['c3'].".jpg",$img_q);
      imagedestroy($img_r); // Alliberar memoria
    }
    if($_POST['w4']!=0 && $_POST['h4']!=0){
      $img_r = ImageCreateTrueColor( $img_w, $img_h );
      imagecopyresampled($img_r,$img_f,0,0,$_POST['x4'],$_POST['y4'],$img_w,$img_h,$_POST['w4'],$_POST['h4']);
      imagejpeg($img_r,$ruta."/".$_POST['c4'].".jpg",$img_q);
      imagedestroy($img_r); // Alliberar memoria
    }

    imagedestroy($img_f); // Alliberar memoria
    exit;
  }
?>