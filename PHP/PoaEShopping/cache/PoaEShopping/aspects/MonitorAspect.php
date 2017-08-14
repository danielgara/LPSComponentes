<?php
// Aspect/MonitorAspect.php

namespace aspects;

use Go\Aop\Aspect;
use Go\Aop\Intercept\FieldAccess;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\After;
use Go\Lang\Annotation\Before;
use Go\Lang\Annotation\Around;
use Go\Lang\Annotation\Pointcut;

/**
 * Monitor aspect
 */
class MonitorAspect implements Aspect
{

    /**
     * Method that will be called before real method
     *
     * @param MethodInvocation $invocation Invocation
     * @Before("execution(public aspects\admincategorias\AdminCategorias->*(*))")
     */
    public function beforeMethodExecution(MethodInvocation $invocation)
    {
		//check login here
		echo "check login";
    }
}