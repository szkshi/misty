<?php
/**
 * This file is part of the BEAR.Package package
 *
 * @package BEAR.Package
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Package\Module\Log;

use Guzzle\Log\MonologLogAdapter;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\TestHandler;
use Monolog\Logger;
use Ray\Di\ProviderInterface as Provide;


/**
 * Cache
 *
 * @package    BEAR.Sunday
 * @subpackage Module
 */
class MonologProvider implements Provide
{
    /**
     * Log directory path
     *
     * @var string
     */
    private $logDir;

    /**
     * Constructor
     *
     * @param string $logDir
     *
     * @Inject
     * @Named("log_dir")
     */
    public function __construct($logDir)
    {
        $this->logDir = $logDir;
    }

    /**
     * Provide instance
     *
     * @return CacheAdapter
     */
    public function get()
    {
        $log = new Logger('app');
        $logFile = $this->logDir . '/' . PHP_SAPI . '.app.log';
        touch($logFile);
        if (is_writable($logFile)) {
            $log->pushHandler(new StreamHandler($logFile));
        } else {
            $log->pushHandler(new TestHandler);
        }
        $adapter = new MonologLogAdapter($log);

        return $adapter;
    }
}
