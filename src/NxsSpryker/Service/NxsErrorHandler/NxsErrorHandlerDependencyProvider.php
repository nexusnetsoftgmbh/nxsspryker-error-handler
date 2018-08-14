<?php


namespace NxsSpryker\Service\NxsErrorHandler;


use Spryker\Service\Kernel\AbstractBundleDependencyProvider;
use Spryker\Service\Kernel\Container;

class NxsErrorHandlerDependencyProvider extends AbstractBundleDependencyProvider
{
    public const ERROR_HANDLER_PLUGINS = 'nxserrorhandler.error.handler.plugins';
    public const EXCEPTION_HANDLER_PLUGINS = 'nxserrorhandler.exception.handler.plugins';
    public const SHUTDOWN_HANDLER_PLUGINS = 'nxserrorhandler.shutdown.handler.plugins';

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    public function provideServiceDependencies(Container $container)
    {
        $container[self::ERROR_HANDLER_PLUGINS] = function (Container $container) {
            return $this->getErrorHandlerPlugins();
        };

        $container[self::EXCEPTION_HANDLER_PLUGINS] = function (Container $container) {
            return $this->getExceptionHandlerPlugins();
        };

        $container[self::SHUTDOWN_HANDLER_PLUGINS] = function (Container $container) {
            return $this->getShutdownHandlerPlugins();
        };

        return $container;
    }

    /**
     * @return \NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin\NxsErrorHandlerPlugin[]
     */
    protected function getErrorHandlerPlugins(): array
    {
        return [];
    }

    /**
     * @return \NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin\NxsExceptionHandlerPlugin[]
     */
    protected function getExceptionHandlerPlugins(): array
    {
        return [];
    }

    /**
     * @return \NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin\NxsShutdownHandlerPlugin[]
     */
    protected function getShutdownHandlerPlugins(): array
    {
        return [];
    }

}