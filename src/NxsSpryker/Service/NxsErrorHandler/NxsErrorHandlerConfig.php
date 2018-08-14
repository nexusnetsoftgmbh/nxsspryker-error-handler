<?php


namespace NxsSpryker\Service\NxsErrorHandler;


use Spryker\Service\Kernel\AbstractBundleConfig;

class NxsErrorHandlerConfig extends AbstractBundleConfig
{
    public const IS_DEBUG = 'nxserrorhandler.is.debug';

    /**
     * @return bool
     */
    public function isDebug(): bool
    {
        return $this->get(self::IS_DEBUG, false);
    }
}