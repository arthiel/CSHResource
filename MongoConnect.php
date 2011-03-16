<?php
/*	error_reporting(E_ALL);
    ini_set('display_errors', '1');*/
	class MongoConnect{
	    public $csh_collection;
	    
	    public function __construct(){
        	$c = new Mongo();
	
        	$db = $c->people;
	        $this->csh_collection = $db->csh;
	    } 
	}
?>