<?php


class RequestController
{
	const VALID_METHODS = array('GET', 'POST', 'PUT', 'DELETE');
	const VALID_PROTOCOL = array('HTTPS/1.1', 'HTTPS/1.0', 'HTTP/1.1', 'HTTP/1.0');
	const VALID_PATHS = array('localhost/aula4/','localhost/aula4/index.php','localhost/aula4/request.php','localhost/aula4/request_controller.php');

	public function create_request($request_info)
	{
		if(!self::is_valid_method($request_info['REQUEST_METHOD']))
		{
			return array("code" => "405", "message" => "method not allowed");
			
		}
		if(!self::is_valid_protocol($request_info['SERVER_PROTOCOL']))
		{
			return array("code" => "505", "message" => "HTTP Version Not Supported");
		}
		if(!self::is_valid_client_addr($request_info['REMOTE_ADDR']))
		{
			return array("code" => "400", "message" => "Bad Request");
		}
		if(!self::is_valid_path($request_info['HTTP_HOST'].$request_info['PHP_SELF']))
		{
			return array("code" => "400", "message" => "Invalid path");
		}

		return "pipoca";
	//	$request_info['REMOTE_ADDR'];
	//	$request_info['SERVER_ADDR'];
	//	$request_info['SERVER_PROTOCOL'];
	//	$request_info['REQUEST_URI'];
	//	$request_info['QUERY_STRING'];
	//	file_get_contents('php://input');
		
	//	return new Request();
		
	}
	
	public function is_valid_method($method)
	{
		if( is_null($method) || !in_array($method, self::VALID_METHODS))
			return false;
		
		return true;
	}


	public function is_valid_protocol($protocol)
	{
		if( is_null($protocol) || !in_array($protocol, self::VALID_PROTOCOL))
			return false;

		return true;
	}

	public function is_valid_client_addr($client_addr)
	{
		if(!filter_var($client_addr, FILTER_VALIDATE_IP)) {
			return false;
		}
		return true;
	}
	
	public function is_valid_path($path)
	{
		if (is_null($path) || !in_array($path, self::VALID_PATHS))
			return false;
		
		return true;
	}



}
