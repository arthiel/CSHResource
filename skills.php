<?php
require_once('csh_data.php');

$csh = new CSH_Data();

$foo = $csh->get_names();

//$name;


$name = $_GET['person'];
$year = $csh->get_year($name); 
$skills = $csh->get_skills($name);
$major = $csh->get_major($name);

require_once('views/skills_view.php');
?>