<!DOCTYPE HTML>
<html>

<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="skills.css" type="text/css"></link>
	
	<script = "text/javascript">
		$(document).ready(function(){
			var sections = $(#nav li);
			var content = $(.Person);
		
		
			sections.onclick(function(){
				
			});
		}
	</script>
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
			<li> <a href="#">Home</a> </li>
			<li> <a href="#">Search</a></li>
			<li> <a href="#">View </a></li>
		</ul>
	</div>
</div>
<div class="contain">
	<div id="nav">	
		<ul>
			<?=$foo?>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>
			<li>Person</li>		
		</ul>
	</div>
	<div class="Person">
		<div class="info">
			<h2> Name Here </h2>
			<h3> Year Three, My Major </h3>
		</div>
		<div class="skills_cont">		
			<?=$skills?>
		</div>
	</div>
</div>

	
</body>
</html>