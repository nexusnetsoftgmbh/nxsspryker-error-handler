<?php


namespace NxsSpryker\Service\NxsErrorHandler\Plugin;


use Silex\Application;
use Silex\ServiceProviderInterface;
use Spryker\Service\Kernel\AbstractPlugin;

/**
 * @method \NxsSpryker\Service\NxsErrorHandler\NxsErrorHandlerService getService()
 */
class NxsErrorHandlerServiceProvider extends AbstractPlugin implements ServiceProviderInterface
{
    /**
     * @param \Silex\Application $app
     */
    public function register(Application $app)
    {
    }

    /**
     * @param \Silex\Application $app
     */
    public function boot(Application $app)
    {
        $this->getService()->registerErrorHandler();
    }

}