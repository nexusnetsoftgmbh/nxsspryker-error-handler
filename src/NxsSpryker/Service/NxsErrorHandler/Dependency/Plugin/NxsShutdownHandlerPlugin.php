<?php


namespace NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin;


interface NxsShutdownHandlerPlugin
{
    /**
     * @param bool $isDebug
     */
    public function register(bool $isDebug): void;
}