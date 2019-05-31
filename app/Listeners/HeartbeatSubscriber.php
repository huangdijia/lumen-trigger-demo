<?php

namespace App\Listeners;

use Huangdijia\Trigger\EventSubscriber;

class HeartbeatSubscriber extends EventSubscriber
{
    public function onHeartbeat(\MySQLReplication\Event\DTO\HeartbeatDTO $event)
    {
        dump($event->__toString());
    }
}