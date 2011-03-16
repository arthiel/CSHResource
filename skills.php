<?php
require_once('csh_data.php');

$csh = new CSH_Data();

$foo = $csh->get_names();

//$name;
//$year = get_year("Emily Egeland"); 

$skills = $csh->get_skills("Sean McGary");

require_once('views/skills_view.php');
?>