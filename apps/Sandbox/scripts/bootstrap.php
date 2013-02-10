<?php
/**
 * boot
 *
 *  set composer auto loader
 *  set silent auto loader for doctrine annotation
 *  set ignore annotation
 *
 * @global $PackageDir
 */
namespace Sandbox;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Annotations\AnnotationReader;

umask(0);

// framework
framework: {
    $packageDir = dirname(dirname(dirname(__DIR__)));
    $loader = require $packageDir . '/vendor/autoload.php';
    AnnotationRegistry::registerLoader([$loader, 'loadClass']);
    AnnotationReader::addGlobalIgnoredName('noinspection'); // for phpStorm
    AnnotationReader::addGlobalIgnoredName('returns'); // for Mr.Smarty. :(
    require $packageDir . '/vendor/smarty/smarty/distribution/libs/Smarty.class.php';
}

application: {
}
