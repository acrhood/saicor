<?php  
	    require_once 'model/m_general.php';
	    $kakaroto = new _general();

	    if (!isset($_REQUEST['accion'])) {
	   	require '../_config/mySmarty.php';
	   
	   	$smarty  = new mySmarty();
	   	$smarty->setModule('dashboard');
	   	$pg = $smarty->fetch('../view/menuSmarty.php');
	   	$fot = $smarty->fetch('../view/footerSmarty.php');

	   	$smarty->assign('PROV',$kakaroto->kamehameha('id,nombre',8,'id > 0 order by nombre'));
	   	$smarty->assign('SEG',$kakaroto->kamehameha('id,nombre',117,'id > 0 order by nombre'));
	   	$smarty->assign('CONF',$kakaroto->kamehameha('id,nombre',118,'id > 0 order by nombre'));
	   	$smarty->assign('CAMBIO',$kakaroto->kamehameha('valor',15,'id  = 1'));
	   	$smarty->assign('VEHI',$kakaroto->kamehameha('',130,'@@usr'));

        $smarty->assign('NAV',$pg);
        $smarty->assign('FOOT',$fot);
        $smarty->display('v_garaje.tpl');

	   }else{
	   $pagina = 0;
	   	switch ($_REQUEST['accion']) {
	   		case 1:
	   			 $fuente = $_REQUEST['arreglo'];
	   			 unlink($fuente);
	   			break;
	   		case 2:

	   			break;
	   		case 3:
	   			
	   			break;
	   		case 4:
	   			
	   			break;
	   		case 5:
	   			
	   			break;
	   	}
		if(!$pagina){
		   	if (is_array($transaccion)){
				$marcas = $transaccion;
				$succed = 1;
				}else{
					$marcas = array('ERROR'=>$transaccion);
					$succed = 0;
				}
		
				$salida = array('succed'=>$succed);
				array_push($salida, $marcas);
				print_r(json_encode($salida));	
		
		   }
	    }	
			   
?>