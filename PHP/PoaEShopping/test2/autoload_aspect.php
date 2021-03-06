<?php
/**
 * Go! AOP framework
 *
 * @copyright Copyright 2012, Lisachenko Alexander <lisachenko.it@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

use Doctrine\Common\Annotations\AnnotationRegistry;
use Demo\Aspect\ApplicationAspectKernel;
use Demo\Aspect\Login;
use Go\Aop\Features;

include __DIR__ .'/autoload.php';

// Initialize demo aspect container
$defaultFeatures = ApplicationAspectKernel::getDefaultFeatures();
ApplicationAspectKernel::getInstance()->init(array(
    'debug'    => true,
    'cacheDir' => __DIR__ . '/cache'
));

$login = new Login();
$login->hola(); 