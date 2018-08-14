<?php


namespace NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin;


interface NxsErrorHandlerPlugin
{
    /**
     * @param bool $isDebug
     */
    public function register(bool $isDebug): void;
}