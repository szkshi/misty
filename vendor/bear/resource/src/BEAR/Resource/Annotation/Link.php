<?php
/**
 * This file is part of the BEAR.Resource package
 *
 * @package BEAR.Resource
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Resource\Annotation;

/**
 * Link
 *
 * @Annotation
 * @Target("METHOD")
 *
 * @package    BEAR.Resource
 * @subpackage Annotation
 */
final class Link implements AnnotationInterface
{
    /**
     * Relation
     *
     * @var string
     */
    public $rel;

    /**
     * Hyper reference
     *
     * @var string
     */
    public $href;

    /**
     * Request method
     *
     * @var string
     */
    public $method = 'get';
}
