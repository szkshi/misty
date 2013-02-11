<?php
/**
 * @package    App
 * @subpackage Module
 */
namespace App\Module\App;

use Ray\Di\ProviderInterface as Provide;
use BEAR\Resource\Adapter\App as AppAdapter;
use BEAR\Resource\SchemeCollection;
use BEAR\Sunday\Inject\AppNameInject;
use BEAR\Sunday\Inject\InjectorInject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;

/**
 * Scheme collection
 *
 * @package    App
 * @subpackage Module
 */
class SchemeCollectionProvider implements Provide
{
    use AppNameInject;
    use InjectorInject;

    /**
     * Return resource adapter set.
     *
     * @return SchemeCollection
     */
    public function get()
    {
        $schemeCollection = new SchemeCollection;
        $pageAdapter = new AppAdapter($this->injector, $this->appName, 'Resource\Page');
        $appAdapter = new AppAdapter($this->injector, $this->appName, 'Resource\App');
        $schemeCollection->scheme('page')->host('self')->toAdapter($pageAdapter);
        $schemeCollection->scheme('app')->host('self')->toAdapter($appAdapter);

        return $schemeCollection;
    }
}
