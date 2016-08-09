<?php
    class Request{
       
        private $Method;
        private $Protocol;
        private $IP;
        private $Resource;
        private $Parameters;
       
        public function __construct($method, $protocol, $ip, $resource, $parameters){
            $this->Method = $method;
            $this->Protocol = $protocol;
            $this->IP = $ip;
            $this->Resource = $resource;
            $this->Parameters = $parameters;
        }
 
        public function getProtocol(){
            return $this->Protocol;
        }
 
        public function getMethod(){
            return $this->Method;
        }
 
        public function getIP(){
            return $this->IP;
        }
 
        public function getResource(){
            return $this->Resource;
        }
 
        public function getParameters(){
            return $this->Parameters;
        }
 
        public function setProtocol($protocol){
            $this->Protocol = $protocol;
        }
 
        public function setMethod($method){
            $this->Method = $method;
        }
 
        public function setIP($ip){
            $this->IP = $ip;
        }
 
        public function setResource($resource){
            $this->Resource = $resource;
        }
 
        public function setParameters($parameters){
            $this->Parameters = $parameters;
        }
 
        public function toString(){
            $request = $this->protocol."://".$this->ip."/".$this->resource."?".$this->parameters;
            
	return utf8_encode($request);
        }
 
	$request = new Request("http","127.0.0.1","resources/Everton-Galdino",array("param1"=>123,"param2"=>456),"POST");
	echo $request->toString();
    }
