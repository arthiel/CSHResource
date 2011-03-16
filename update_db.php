<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<p>Calculating.</p>
<?php
	
	print_r($_POST);
	require_once("update.php");
	
	$updater = new Update_DB();
	
	if( array_key_exists('submit', $_POST)){
		echo "Submit.";
		$newrecord = array("name"=>$_POST['name'], "year"=>$_POST['year'], 
					"major"=>$_POST['major'], 
					"skills"=>(object)array($_POST['cat1'] 
							=> array($_POST['c1s1'], $_POST['c1s2'], $_POST['c1s3'], 
									 $_POST['c1s4'], $_POST['c1s5']),
							$_POST['cat2'] => array($_POST['c2s1'], $_POST['c2s2'],
								$_POST['c2s3'], $_POST['c2s4'], $_POST['c2s5']),
							$_POST['cat3'] => array($_POST['c3s1'], $_POST['c3s2'],
								$_POST['c3s3'], $_POST['c3s4'], $_POST['c3s5']))
					);
		echo "Record retrieved";
		$updater->addRecord($newrecord);			
		
		echo "Record Added";
	}
?>
</body>
</html>