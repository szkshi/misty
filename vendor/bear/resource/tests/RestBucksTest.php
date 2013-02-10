<?php

namespace BEAR\Resource;

use Ray\Di\Definition;
use Guzzle\Parser\UriTemplate\UriTemplate;
use Ray\Di\Annotation;
use Ray\Di\Config;
use Ray\Di\Forge;
use Ray\Di\Container;
use Ray\Di\Manager;
use Ray\Di\Injector;
use Ray\Di\EmptyModule;
use BEAR\Resource\Builder;
use BEAR\Resource\Mock\User;
use BEAR\Resource\SchemeCollection;
use BEAR\Resource\Adapter\App;

/**
 * Test class for BEAR.Resource.
 */
class RestBucksTest extends \PHPUnit_Framework_TestCase
{
    protected $skelton;

    protected function setUp()
    {
        parent::setUp();

        $this->resource =  require dirname(__DIR__) .'/scripts/instance.php';
        $injector =  require dirname(__DIR__) .'/scripts/injector.php';
        $scheme = new SchemeCollection;
        $scheme->scheme('app')->host('self')->toAdapter(new App($injector, 'restbucks', 'Resource\App'));
        $this->resource->setSchemeCollection($scheme);
    }

    public function test_New()
    {
        $this->assertInstanceOf('\BEAR\Resource\Resource', $this->resource);
    }

    public function testOption()
    {
        $allow = $this->resource->options->uri('app://self/Menu')->eager->request()->headers['allow'];
        asort($allow);
        $expected = ['get'];
        $this->assertSame($expected, $allow);
    }

    /**
     * @expectedException BEAR\Resource\Exception\MethodNotAllowed
     */
    public function testOptionDelete()
    {
        $options = $this->resource->delete->uri('app://self/Menu')->eager->request()->body;
    }

    public function tesMenuLinksOrder()
    {
        $menu = $this->resource->get->uri('app://self/Menu')->withQuery(array('drink' => 'latte'))->eager->request();
        $orderUri = $menu->links['order'];
        $response = $this->resource->post->uri($orderUri)->addQuery(array('drink' => $menu['drink']))->eager->request();
        $expected = 201;
        $this->assertSame($expected, $response->code);
        $expected = 'app://self/Order/?id=1234';
        $this->assertSame($expected, $response->headers['Location']);
    }

    public function testOrderLinksPaymentAddQuery()
    {
        $order = array('drink' => 'latte');
        $order = $this->resource->post->uri('app://self/Order')->withQuery($order)->eager->request();
        $a = new A(new UriTemplate);
        $paymentUri = $a->href('payment', $order);
        $payment = array('credit_card_number' => '123456789', 'expires' => '07/07', 'name' => 'John Citizen', 'amount' => '4.00');
        $response = $this->resource->put->uri($paymentUri)->addQuery($payment)->eager->request();
        $expected = 201;
        $this->assertSame($expected, $response->code);
        $expected = 'app://self/Order/?id=';
        $this->assertContains($expected, $response->headers['Location']);
    }

}
