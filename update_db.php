<!DOCTYPE HTML>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="Update.css" type="text/css"></link>
</head>
<body>
<?php
	
	require_once("update.php");
	
	$updater = new Update_DB();
	
	if( array_key_exists('submit', $_POST)){
		
		isset($_POST['name']) ? $name = $_POST['name'] : header('location:"update.html"');
		isset($_POST['year']) ? $year = $_POST['year'] : header('location:"update.html"');
		isset($_POST['major']) ? $major = $_POST['major']: header('location:"update.html"');
		isset($_POST['cat1']) ? $skillcat1 = $_POST['cat1']: header('location:"update.html"');
		/*isset($_POST['c1s1']) ? $sc1s1 = $_POST['c1s1'];
		isset($_POST['c1s2']) ? $sc1s2 = $_POST['c1s2'];
		isset($_POST['c1s3']) ? $sc1s3 = $_POST['c1s3'];
		isset($_POST['c1s4']) ? $sc1s4 = $_POST['c1s4'];
		isset($_POST['c1s5']) ? $sc1s5 = $_POST['c1s5']);*/
		isset($_POST['cat2']) ? $skillcat2 = $_POST['cat2'] : header('location:"update.php"');
		/*isset($_POST['sc2s1']) ? $sc2s1 = $_POST['c2s1'];
		isset($_POST['sc2s2']) ? $sc2s2 = $_POST['c2s2'];
		isset($_POST['sc2s3']) ? $sc2s3 = $_POST['c2s3'];
		isset($_POST['sc2s4']) ? $sc2s4 = $_POST['c2s4'];
		isset($_POST['sc2s5']) ? $sc2s5 = $_POST['c2s5'];*/
		isset($_POST['cat3']) ? $skillcat3 = $_POST['cat3'] : header('location:"update.php"');
		/*isset($_POST['sc3s1']) ? $sc3s1 = $_POST['c3s1'];
		isset($_POST['sc3s2']) ? $sc3s2 = $_POST['c3s2'];
		isset($_POST['sc3s3']) ? $sc3s3 = $_POST['c3s3'];
		isset($_POST['sc3s4']) ? $sc3s4 = $_POST['c3s4'];
		isset($_POST['sc3s5']) ? $sc3s5 = $_POST['c3s5'];*/
		
		
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
		$updater->addRecord($newrecord);			
		
	}
?>
<div id="content">

<div id="header">
	<div id="head_text">
		<h1>CSHResource</h1>
		<p><i>Know who knows what you want</i></p>
	</div>
	<div id="head_nav">
		<ul>
			<li> <a href="skills.php">Home</a> </li>
			<li> <a href="skills.php">View </a></li>
			<li> <a href="update.html">Add </a></li>
		</ul>
	</div>
</div>
<div class="contain">
<h1>Update Added.</h1>

</body>
</html>