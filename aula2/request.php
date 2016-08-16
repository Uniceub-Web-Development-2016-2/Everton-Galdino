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
		$String = "";
		$Inc = 1;
		foreach($this->Parameters as $var) {
			$String .= "P".$Inc."=".$var."&amp";
			$Inc++;
		}
	return $this->Protocol.'://'.$this->IP.'/'.$this->Resource.'?'.$String;
        }
    }

$request = new Request("POST", "http","127.0.0.1","resources/Everton-Galdino",array ("nome", "email", "telefone", "logradouro"));
echo $request->toString();
