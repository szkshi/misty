<?php
/**
 * @package    App
 * @subpackage Resource
 */
namespace App\Resource\Page;

use BEAR\Resource\AbstractObject as Page;
use BEAR\Sunday\Inject\ResourceInject;
use Ray\Di\Di\Inject;

/**
 * Index page
 *
 * @package    App
 * @subpackage Resource
 */
class Index extends Page
{
    use ResourceInject;

    /**
     * @var array
     */
    public $body = [
        'greeting' =>  ''
    ];

    public function __construct()
    {
    }

    public function onGet($name = 'BEAR.Sunday')
    {
        $this['greeting'] = 'Hello ' . $name;
        return $this;
    }
}
