<?php

namespace Autowp\Cron;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class CronControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CronController(
            $container->get('Application'),
            $container->get('CronEventManager')
        );
    }
}
