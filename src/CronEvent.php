<?php

declare(strict_types=1);

namespace Autowp\Cron;

use Laminas\EventManager\Event;
use Laminas\Mvc\ApplicationInterface;

class CronEvent extends Event
{
    public const EVENT_DAILY_MAINTENANCE = 'daily.maintenance';
    public const EVENT_MIDNIGHT          = 'midnight';

    protected ApplicationInterface $application;

    /**
     * Set application instance
     *
     * @return $this
     */
    public function setApplication(ApplicationInterface $application)
    {
        $this->setParam('application', $application);
        $this->application = $application;
        return $this;
    }

    /**
     * Get application instance
     *
     * @return ApplicationInterface
     */
    public function getApplication()
    {
        return $this->application;
    }
}
