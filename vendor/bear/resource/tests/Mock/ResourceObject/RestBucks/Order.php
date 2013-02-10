<?php

namespace testworld\ResourceObject\RestBucks;

use BEAR\Resource\ObjectInterface as ResourceObject;
use BEAR\Resource\AbstractObject;
use BEAR\Resource\Resource;
use BEAR\Resource\Uri;
use Ray\Di\Di\Scope;

/**
 * Order
 *
 * @Scope("singleton")
 */
class Order extends AbstractObject
{

    private $orders = [];

    /**
     * @param Resource $resource
     */
    public function __construct()
    {
    }

    public function onGet($id)
    {
        return $this->orders[$id];
    }

    /**
     * Post
     *
     * @param string $drink
     */
    public function onPost($drink)
    {
        // data store here
        //   .. and get order id.
        $orderId = 1234;
        $this->orders[$orderId] = $drink;

        // created
        $this->code = 201;
        $this->headers['Location'] = "app://self/RestBucks/Order/?id=$orderId";
        $this->links['payment'] = new Uri('app://self/RestBucks/Payment', array('order_id' => $orderId));

        return $this;
    }
}
