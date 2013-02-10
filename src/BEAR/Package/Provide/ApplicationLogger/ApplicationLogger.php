<?php
/**
 * This file is part of the BEAR.Package package
 *
 * @package BEAR.Package
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Package\Provide\ApplicationLogger;

use BEAR\Sunday\Extension\ApplicationLogger\ApplicationLoggerInterface;
use BEAR\Sunday\Extension\Application\AppInterface;
use BEAR\Resource\LoggerInterface as ResourceLoggerInterface;
use BEAR\Resource\Logger as ResourceLogger;
use Ray\Di\Di\Inject;

/**
 * Logger
 *
 * @package BEAR.Package
 */
final class ApplicationLogger implements ApplicationLoggerInterface
{
    /**
     * Resource logger
     *
     * @var ResourceLogger
     */
    private $resourceLogger;

    /**
     * Set resource logger
     *
     * @param ResourceLoggerInterface $resourceLogger
     *
     * @Inject
     */
    public function __construct(ResourceLoggerInterface $resourceLogger)
    {
        $this->resourceLogger = $resourceLogger;
    }

    /**
     * (non-PHPdoc)
     * @see BEAR\Sunday\Application.LoggerInterface::log()
     * @noinspection PhpUnusedPrivateMethodInspection
     */
    private function logOnShutdown(AppInterface $app)
    {
        $logs = new ResourceLogIterator($this->resourceLogger);
        foreach ($logs as $log) {
            /** @var $log ResourceLogIterator */
            $log->apcLog();
        }
        unset($app);
        // @todo eliminate all unrealizable objects to enable store $app.
        // apc_store('request-' . get_class($app), var_export($app, true));
    }

    /**
     * (non-PHPdoc)
     * @see BEAR\Sunday\Application.LoggerInterface::register()
     */
    public function register(AppInterface $app)
    {
        register_shutdown_function(
            function () use ($app) {
                $onShutdownLog = [$this, 'logOnShutdown'];
                /** @var $onShutdownLog Callable */
                $onShutdownLog($app);
            }
        );
    }

    /**
     * Output web console log (FirePHP log)
     *
     * @return void
     */
    public function outputWebConsoleLog()
    {
        $logs = new ResourceLogIterator($this->resourceLogger);
        foreach ($logs as $log) {
            /** @var $log ResourceLogIterator */
            $log->fire();
        }
    }
}
