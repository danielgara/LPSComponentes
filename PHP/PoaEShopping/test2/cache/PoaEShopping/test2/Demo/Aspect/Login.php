<?php

namespace Demo\Aspect;

class Login__AopProxied
{
	
	public function Login(){
		
	}
	
	public function hola(){
		echo "hola";
	}
}

include_once AOP_CACHE_DIR . '/_proxies/PoaEShopping\\test2\\Demo\\Aspect\\Login.php';



?>