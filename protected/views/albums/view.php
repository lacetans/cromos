<?php
/* @var $this AlbumsController */
/* @var $model Albums */

$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Albums', 'url'=>array('index')),
	array('label'=>'Create Albums', 'url'=>array('create')),
	array('label'=>'Update Albums', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Albums', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Albums', 'url'=>array('admin')),
);
?>

<h1>View Albums #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuari_id',
		'nom',
		'descripcio',
		'portada',
		'aprovat',
	),
)); ?>

<?php
	if(Yii::app()->user->isGuest){
		echo "<span id='cc_login'>No tens permis per crear cromos, t'has de logar</span>";
	}else{
		echo "<span id='cc_login'></span>";
	}
?>

<!-- CCROP START -->
<br />
<!-- CCROP STYLES -->
    <link rel="stylesheet" type="text/css" href="/m07uf3/cromos/assets/ccrop/css/imgareaselect.css">
    <link rel="stylesheet" type="text/css" href="/m07uf3/cromos/assets/ccrop/css/ccrop.css">
    <div id="cc_container">
<!-- CCROP CONTROLS -->
      <table id="cc_ctrl" cellspacing="0" cellpadding="0" border="1">
        <tr>
          <td class="cc_ce0w" rowspan="4">&nbsp;</td>
          <td class="cc_cenh"><span>Imatge</span></td>
          <td class="cc_ce0w" rowspan="4">&nbsp;</td>
          <td class="cc_righ"><span>Arxiu de la imatge</span></td>
          <td class="cc_lefh" colspan="4"><input id="cc_file" type="file"></td>
          <td class="cc_ce0w" rowspan="3">&nbsp;</td>
          <td class="cc_cenh"><span>Opcions</span></td>
          <td class="cc_ce0w" rowspan="4">&nbsp;</td>
          <td class="cc_cenh" colspan="2"><span id="cc_dels">Borrar</span></td>
          <td class="cc_ce0w" rowspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td class="cc_cenh" rowspan="3"><div id="cc_drop">ccrop<br />drop<br />file<br />zone</div></td>
          <td class="cc_righ"><span id="cc_modes">Mode dels cromos</span></td>
          <td class="cc_cenh"><button id="cc_mode" class="cc_btnw0">individual</button></td>
          <td class="cc_ce0w" rowspan="2">&nbsp;</td>
          <td class="cc_cenh"><button id="cc_next" class="cc_btnw0">seguent</button></td>
          <td class="cc_lefh"><span id="cc_nexts">Següent cromo</span></td>
          <td class="cc_lefh"><input id="cc_plin" type="checkbox" value="ok" checked/><span>Mostra linies divisories</span></td>
          <td class="cc_cenh"><button id="cc_del1">1</button></td>
          <td class="cc_cenh"><button id="cc_del2">2</button></td>
        </tr>
        <tr>
          <td class="cc_righ"><span id="cc_nums">Nombre de cromos</span></td>
          <td class="cc_cenh"><button id="cc_num" class="cc_btnw0">4</button></td>
          <td class="cc_cenh"><button id="cc_save" class="cc_btnw0">guardar</button></td>
          <td class="cc_lefh"><span id="cc_save">Guardar cromos</span></td>
          <td class="cc_lefh"><input id="cc_asave"type="checkbox" value="ok"/><span>Guardar al finalitzar</span></td>
          <td class="cc_cenh"><button id="cc_del3">3</button></td>
          <td class="cc_cenh"><button id="cc_del4">4</button></td>
        </tr>
        <tr>
          <td class="cc_cenh" colspan="7"><span id="cc_info"></span></td>
          <td class="cc_cenh" colspan="2"><button id="cc_del0" class="cc_btnw1">tots</button></td>
        </tr>
      </table>
<!-- CCROP CROP IMAGE -->
      <div id="cc_right">
        <canvas id="cc_canvas" width="600" height="800"></canvas>
      </div>
<!-- CCROP CANVAS PREVIEW -->
      <div id="cc_left">
        <img id="cc_img" src="/m07uf3/cromos/assets/ccrop/img/cc_img_ini.png"/>
      </div>
    </div>
    <div id="cc_test"></div>
<!-- CCROP SCRIPTS -->
    <script type="text/javascript" src="/m07uf3/cromos/assets/ccrop/js/jquery.imgareaselect.pack.js"></script>
    <script type="text/javascript" src="/m07uf3/cromos/assets/ccrop/js/ccrop.js"></script>
    <script type="text/javascript">
    	// si es usuari logat mostra el creador de cromos
		if($("#cc_login").html()==""){
			document.getElementById("cc_container").style.display = "block";
		}
		// enviar al controlador la informació per la bd
        function alta_cromos(){
            $.ajax({
                url: <?php echo "'".CController::createUrl('Albums/alta_cromos')."'"; ?>,
                type: "POST",
                // usr:usuari, ida:id album, nc:nombre de cromos
      			data: {usr:$("#yw0 tr").find("td").eq(1).html(),ida:$("#yw0 tr").find("td").eq(0).html(),nc:$("#cc_num").html()}, 
      			success: function(data){
					document.getElementById("cc_test").innerHTML = data;
      			}
    		});
        }
    </script>
<!-- CCROP END -->