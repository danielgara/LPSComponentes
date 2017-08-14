<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use aspects\ApplicationAspectKernel;
use aspects\admincategorias\AdminCategorias;
use Go\Aop\Features;

include __DIR__ .'/autoload.php';

// Initialize demo aspect container
$defaultFeatures = ApplicationAspectKernel::getDefaultFeatures();
ApplicationAspectKernel::getInstance()->init(array(
    'debug'    => true,
    'cacheDir' => __DIR__ . '/cache'
));

$login = new AdminCategorias();
$login->agregar("zzz2","zzz2"); 