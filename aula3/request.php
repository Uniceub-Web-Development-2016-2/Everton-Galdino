<?php
    class Request{
       
        private $method;
        private $protocol;
        private $ip;
	private $remote_ip;
        private $resource;
        private $parameters;
       
        public function __construct($method, $protocol, $ip, $remote_ip, $resource, $parameters){
        	$this->method = $method;
        	$this->protocol = $protocol;
        	$this->ip = $ip;
		$this->remote_ip = $remote_ip;
        	$this->resource = $resource;
        	$this->parameters = $parameters;
        }
 
        public function getProtocol(){
            return $this->protocol;
        }
 
        public function getRemote_ip(){
            return $this->remote_ip;
        }

        public function getMethod(){
            return $this->method;
        }
 
        public function getIP(){
            return $this->ip;
        }
 
        public function getResource(){
            return $this->resource;
        }
 
        public function getParameters(){
            return $this->parameters;
        }
 
        public function setProtocol($protocol){
            $this->protocol = $protocol;
        }

        public function setRemote_ip($remote_ip){
            $this->remote_ip = $remote_ip;
        }

        public function setMethod($method){
            $this->method = $method;
        }
 
        public function setIp($ip){
            $this->ip = $ip;
        }
 
        public function setResource($resource){
            $this->resource = $resource;
        }
 
        public function setParameters($parameters){
            $this->parameters = $parameters;
        }
 
        public function toString(){
		$String = "";
		$Inc = 1;
		foreach($this->Parameters as $var) {
			$String .= "P".$Inc."=".$var."&amp";
			$Inc++;
		}
	return $this->Protocol.'://'.$this->IP.'/'.$this->Resource.'?'.$String;
        }
    }
