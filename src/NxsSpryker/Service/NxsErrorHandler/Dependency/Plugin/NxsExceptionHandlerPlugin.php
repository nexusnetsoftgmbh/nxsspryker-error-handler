<?php


namespace NxsSpryker\Service\NxsErrorHandler\Dependency\Plugin;


interface NxsExceptionHandlerPlugin
{
    /**
     * @param bool $isDebug
     */
    public function register(bool $isDebug): void;
}