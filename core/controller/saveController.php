<?php
//require_once '../../directorio.php';
//include 'core/model/Save.php';
include 'core/model/Save.php';
//$params='jorgegagag';
//$adwordsReport = new Save();
//echo $result = $adwordsReport -> guardar($params);
//die;
if(isset($_GET['action'])){
		$adwordsReport = new Save();
		switch ($_GET['action']) {			
			case 'create':
				$params = $_POST['params'];
				$result = $adwordsReport -> guardar($params);
				echo json_encode($params);				
			break;	
		}
}
?>