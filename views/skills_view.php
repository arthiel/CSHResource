<!DOCTYPE HTML>
<html>

<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="skills.css" type="text/css"></link>
</head>
<body>
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
	<div id="nav">	
		<ul>
			<?=$foo?>	
		</ul>
	</div>
	<div class="Person">
		<div class="info">
			<h2> <?=$name?> </h2>
			<h3> Year <?=$year?>, <?=$major?> </h3>
		</div>
		<div class="skills_cont">		
			<?=$skills?>
		</div>
	</div>
</div>

	
</body>
</html>