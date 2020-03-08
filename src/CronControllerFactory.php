<?php

declare(strict_types=1);

namespace Autowp\Cron;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class CronControllerFactory implements FactoryInterface
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @param string $requestedName
     * @return CronController
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new CronController(
            $container->get('Application'),
            $container->get('CronEventManager')
        );
    }
}
