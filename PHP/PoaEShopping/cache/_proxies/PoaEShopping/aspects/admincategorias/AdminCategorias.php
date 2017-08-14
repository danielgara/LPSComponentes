<?php
namespace aspects\admincategorias;


class AdminCategorias extends AdminCategorias__AopProxied implements \Go\Aop\Proxy
{

    /**
     * Property was created automatically, do not change it manually
     */
    private static $__joinPoints = array();
    
    
    public function agregar($n, $d)
    {
        return self::$__joinPoints['method:agregar']->__invoke($this, array($n, $d));
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('aspects\admincategorias\AdminCategorias',array (
  'method' => 
  array (
    'agregar' => 
    array (
      0 => 'advisor.aspects\\MonitorAspect->beforeMethodExecution',
    ),
  ),
));