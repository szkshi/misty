<?php
/**
 * This file is part of the BEAR.Package package
 *
 * @package BEAR.Sunday
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Package\Provide\ResourceView;

use Ray\Di\AbstractModule;
use Ray\Di\Scope;

/**
 * Hal render module
 *
 * @package    BEAR.Sunday
 * @subpackage Module
 */
class HalModule extends AbstractModule
{
    /**
     * Configure
     *
     * @return void
     */
    protected function configure()
    {
        $this->bind('BEAR\Resource\RenderInterface')->to(__NAMESPACE__ . '\HalRenderer')->in(Scope::SINGLETON);
    }
}
