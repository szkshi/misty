<?php
/**
 * @package    Sandbox
 * @subpackage Module
 */
namespace Sandbox\Module;

use Sandbox\Module\ProdModule;
use BEAR\Sunday\Module;
use BEAR\Sunday\Module\Constant;
use BEAR\Package\Module as PackageModule;

/**
 * Production module
 *
 * @package    Sandbox
 * @subpackage Module
 */
class TestModule extends ProdModule
{
    /**
     * (non-PHPdoc)
     * @see Ray\Di.AbstractModule::configure()
     */
    protected function configure()
    {
        $config = (require __DIR__ . '/config/test.php') + (require __DIR__ . '/config/prod.php');
        /** @var $config array */
        $config['master_db']['dbname'] = 'blogbeartest';
        $config['slave_db'] = $config['master_db'];
        // dependency binding (DI)
        $this->install(new Common\AppModule($config));
        $this->install(new PackageModule\Resource\NullCacheModule($this));
    }
}
