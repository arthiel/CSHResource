<?php
	
	require_once('MongoConnect.php');
	
	class Update_DB extends MongoConnect {
		public function __construct(){
			parent::__construct();
		}	
		
		public function addRecord( $newrec ){
			$this->csh_collection->insert($newrec);	
		}
	}
	
?>