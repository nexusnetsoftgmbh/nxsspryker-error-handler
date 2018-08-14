<?php


namespace NxsSpryker\Service\NxsErrorHandler;


use NxsSpryker\Service\NxsErrorHandler\Model\HandlerProcessor;
use NxsSpryker\Service\NxsErrorHandler\Model\HandlerProcessorInterface;
use Spryker\Service\Kernel\AbstractServiceFactory;

/**
 * @method \NxsSpryker\Service\NxsErrorHandler\NxsErrorHandlerConfig getConfig()
 */
class NxsErrorHandlerServiceFactory extends AbstractServiceFactory
{
    /**
     * @param array $errorHandler
     * @param array $exceptionHandler
     * @param array $shutdownHandler
     *
     * @return \NxsSpryker\Service\NxsErrorHandler\Model\HandlerProcessorInterface
     */
    public function createHandlerProcessor(): HandlerProcessorInterface
    {
        return new HandlerProcessor(
            $this->getErrorHandlerPlugins(),
            $this->getExceptionHandlerPlugins(),
            $this->getShutdownHandlerPlugins(),
            $this->getConfig()->isDebug()
        );
    }

    /**
     * @return \NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin\NxsErrorHandlerPlugin[]
     */
    public function getErrorHandlerPlugins(): array
    {
        return $this->getProvidedDependency(NxsErrorHandlerDependencyProvider::ERROR_HANDLER_PLUGINS);
    }

    /**
     * @return \NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin\NxsExceptionHandlerPlugin[]
     */
    public function getExceptionHandlerPlugins(): array
    {
        return $this->getProvidedDependency(NxsErrorHandlerDependencyProvider::EXCEPTION_HANDLER_PLUGINS);
    }

    /**
     * @return \NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin\NxsShutdownHandlerPlugin[]
     */
    public function getShutdownHandlerPlugins(): array
    {
        return $this->getProvidedDependency(NxsErrorHandlerDependencyProvider::SHUTDOWN_HANDLER_PLUGINS);
    }
}