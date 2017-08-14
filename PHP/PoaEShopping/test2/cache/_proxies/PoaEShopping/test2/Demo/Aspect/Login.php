<?php
namespace Demo\Aspect;


class Login extends Login__AopProxied implements \Go\Aop\Proxy
{

    /**
     * Property was created automatically, do not change it manually
     */
    private static $__joinPoints = array();
    
    
    public function Login()
    {
        return self::$__joinPoints['method:Login']->__invoke($this);
    }
    
    
    public function hola()
    {
        return self::$__joinPoints['method:hola']->__invoke($this);
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('Demo\Aspect\Login',array (
  'method' => 
  array (
    'Login' => 
    array (
      0 => 'advisor.Demo\\Aspect\\MonitorAspect->beforeMethodExecution',
    ),
    'hola' => 
    array (
      0 => 'advisor.Demo\\Aspect\\MonitorAspect->beforeMethodExecution',
    ),
  ),
));