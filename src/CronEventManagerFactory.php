<?php

declare(strict_types=1);

namespace Autowp\Cron;

use Interop\Container\ContainerInterface;
use Laminas\EventManager\EventManager;
use Laminas\ServiceManager\Factory\FactoryInterface;

class CronEventManagerFactory implements FactoryInterface
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @param string $requestedName
     * @return EventManager
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new EventManager();
    }
}
