<?php


namespace NxsSpryker\Service\NxsErrorHandler;


use Spryker\Service\Kernel\AbstractService;

/**
 * @method \NxsSpryker\Service\NxsErrorHandler\NxsErrorHandlerServiceFactory getFactory()
 */
class NxsErrorHandlerService extends AbstractService
{
    public function registerErrorHandler(): void
    {
        $this->getFactory()->createHandlerProcessor()->register();
    }
}