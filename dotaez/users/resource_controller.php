<?php

include_once ('request.php');
include_once ('db_manager.php');

class ResourceController
{	
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
	}

	private function search($request) {
		$query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		return self::select($query);
	}

	private function select($query) {
	$conn = (new DBConnector())->query($query);
	return $conn->fetchAll();
	}
		
	private function queryParams($params) {
		if($params == !null) {
		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key." = '".$value."' AND ";
		}
		$query = substr($query,0,-5);
		return $query;
		}
		return 1;
	}
}




