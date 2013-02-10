<?php
/**
 * Env setting checker
 *
 * @package BEAR.Framework
 */
namespace Sandbox\Interceptor;

use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

/**
 * Form validator
 */
class PostFormValidator implements MethodInterceptor
{
    const TITLE = 0;
    const BODY = 1;

    /**
     * Error
     *
     * @var array
     */
    private $errors = [
        'title' => '',
        'body' => ''
    ];

    /**
     * (non-PHPdoc)
     * @see Ray\Aop.MethodInterceptor::invoke()
     */
    public function invoke(MethodInvocation $invocation)
    {
        // retrieve page and query
        $args = $invocation->getArguments();
        $page = $invocation->getThis();

        // strip tags
        foreach ($args as &$arg) {
            $arg = strip_tags($arg);
        }

        // required title
        if ($args[self::TITLE] === '') {
            $this->errors['title'] = 'title required.';
        }

        // required body
        if ($args[self::BODY] === '') {
            $this->errors['body'] = 'body required.';
        }

        // valid form ?
        if (implode('', $this->errors) === '') {
            return $invocation->proceed();
        }

        // error, modify 'GET' page wih error message.
        $page['errors'] = $this->errors;
        $page['submit'] = [
            'title' => $args[self::TITLE],
            'body' => $args[self::BODY]
        ];

        return $page->onGet();
    }
}
