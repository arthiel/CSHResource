<?php 
require_once('MongoConnect.php');
	class CSH_Data extends MongoConnect {

		public function __construct(){
			parent::__construct();
		}
		
		public function get_names(){	
			$name_string = "";
			
			foreach($this->csh_collection->find() as $obj){
				$name_string .= "<li id=". $obj["name"] . ">" . $obj["name"] . "</li>";	
			}
			
			return $name_string;
		}
		
		public function get_skills($name){
			$skill_list =  "";
			$skill_array = $this->csh_collection->find(array('name' => $name));
			
			$person_data = array();
			foreach($skill_array as $data)
			{
				$person_data[] = $data;
			}

			foreach($skill_array as $skill){

				foreach($skill['skills'] as $key => $value)
				{
					$skill_list .= "<div class='skill'><h3>" . $key . "</h3><ul>";
					
					foreach($value as $myskills){
						$skill_list .= "<li>" . $myskills . "</li>";
					}
					
					$skill_list .= "</div></ul>";
				}
			}
			
			return $skill_list;
		}
		
	}
?>