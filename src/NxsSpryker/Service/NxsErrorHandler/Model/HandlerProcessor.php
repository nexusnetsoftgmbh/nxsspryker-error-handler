<?php


namespace NxsSpryker\Service\NxsErrorHandler\Model;


class HandlerProcessor implements HandlerProcessorInterface
{
    /**
     * @var \NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin\NxsErrorHandlerPlugin[]
     */
    private $errorHandler;

    /**
     * @var \NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin\NxsExceptionHandlerPlugin[]
     */
    private $exceptionHandler;

    /**
     * @var \NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin\NxsShutdownHandlerPlugin[]
     */
    private $shutdownHandler;

    /**
     * @var bool
     */
    private $isDebug;

    /**
     * ErrorHandler constructor.
     *
     * @param array $errorHandler
     * @param array $exceptionHandler
     * @param array $shutdownHandler
     * @param bool $isDebug
     */
    public function __construct(
        array $errorHandler,
        array $exceptionHandler,
        array $shutdownHandler,
        bool $isDebug
    ) {
        $this->errorHandler = $errorHandler;
        $this->exceptionHandler = $exceptionHandler;
        $this->shutdownHandler = $shutdownHandler;
        $this->isDebug = $isDebug;
    }

    public function register(): void
    {
        $this->registerErrorHandler();
        $this->registerExceptionHandler();
        $this->registerShutdownHandler();
    }

    protected function registerErrorHandler(): void
    {
        foreach ($this->errorHandler as $handlerPlugin) {
            $handlerPlugin->register($this->isDebug);
        }
    }

    protected function registerExceptionHandler(): void
    {
        foreach ($this->exceptionHandler as $handlerPlugin) {
            $handlerPlugin->register($this->isDebug);
        }
    }

    protected function registerShutdownHandler(): void
    {
        foreach ($this->shutdownHandler as $handlerPlugin) {
            $handlerPlugin->register($this->isDebug);
        }
    }
}