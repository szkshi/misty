<?php

namespace BEAR\Resource;

use Ray\Di\Annotation;
use Ray\Di\Config;
use Ray\Di\Forge;
use Ray\Di\Container;
use Ray\Di\Manager;
use Ray\Di\Injector;
use Ray\Di\EmptyModule;

use BEAR\Resource\Builder;
use BEAR\Resource\Mock\User;

/**
 * Test class for BEAR.Resource.
 */
class HttpTest extends \PHPUnit_Framework_TestCase
{
    protected $skelton;

    protected function setUp()
    {
        parent::setUp();
        $this->injector = require dirname(dirname(__DIR__)) . '/scripts/injector.php';
        $scheme = new SchemeCollection;
        $scheme->scheme('http')->host('*')->toAdapter(new \BEAR\Resource\Adapter\Http);
        $this->factory = new Factory($scheme);
        $this->httpAdapter = $this->factory->newInstance('http://news.google.com/news?hl=ja&ned=us&ie=UTF-8&oe=UTF-8&output=rss');
    }

    public function test_New()
    {
        $this->assertInstanceOf('\BEAR\Resource\Adapter\Http\Guzzle', $this->httpAdapter);
    }

    public function testGetHeader()
    {
        $ro = $this->httpAdapter->onGet();
        $this->assertSame($ro->headers['Content-Type'][0], 'application/xml; charset=UTF-8');
    }

    public function testGetHeaderRepeatWithCache()
    {
        foreach (range(1,10) as $i) {
            $ro = $this->httpAdapter->onGet();
        }
        $this->assertSame($ro->headers['Content-Type'][0], 'application/xml; charset=UTF-8');
    }

    /**
     * @covers \BEAR\Resource\Adapter\Http\Guzzle::onPost
     * @covers \BEAR\Resource\Adapter\Http\Guzzle::onPut
     * @covers \BEAR\Resource\Adapter\Http\Guzzle::onDelete
     */
    public function testGetBody()
    {
        $ro = $this->httpAdapter->onGet();
        $actual = (string) ($ro->body->channel->title[0]);
        $expected = 'Top Stories - Google News';
        $this->assertSame($expected, $actual);
    }

    public function testHead()
    {
        $ro = $this->httpAdapter->onHead();
        $expected = 'application/xml; charset=UTF-8';
        $this->assertSame($expected, $ro->headers['Content-Type'][0]);
    }

    /**
     * @expectedException Guzzle\Http\Exception\ClientErrorResponseException
     * @covers BEAR\Resource\Adapter\Http\Guzzle::onPut
     */
    public function testPut()
    {
        $ro = $this->httpAdapter->onPut();
    }

    /**
     * @expectedException Guzzle\Http\Exception\ClientErrorResponseException
     * @covers BEAR\Resource\Adapter\Http\Guzzle::onDelete
     */
    public function testDelete()
    {
        $ro = $this->httpAdapter->onDelete();
    }

    /**
     * @covers BEAR\Resource\Adapter\Http\Guzzle::onPost
     */
    public function testPost()
    {
        $ro = $this->httpAdapter->onPost();
        $expected = 'application/xml; charset=UTF-8';
        $this->assertSame($expected, $ro->headers['Content-Type'][0]);
    }

    /**
     *
     * @expectedException Guzzle\Http\Exception\ClientErrorResponseException
     */
    public function test404()
    {
        $this->httpAdapter = $this->factory->newInstance('http://news.google.com/notexists/');
        $ro = $this->httpAdapter->onGet();
        $expected = 'Top Stories - Google News';
        $this->assertSame($expected, $actual);
    }

    public function testJson()
    {
        $this->httpAdapter = $this->factory->newInstance('http://www.bear-project.net/test/json.php');
        $ro = $this->httpAdapter->onGet();
        $this->assertInstanceOf('BEAR\Resource\Adapter\Http\Guzzle', $ro);
    }
}
