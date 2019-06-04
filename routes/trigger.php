<?php

use Huangdijia\Trigger\Facades\Trigger;

// Trigger::on('database.table', 'write', function ($event) { dump($evnet); });
// Trigger::on('database.table', 'update', function ($event) { dump($evnet); });
// Trigger::on('database.table', 'delete', function ($event) { dump($evnet); });

class Foo
{
    public static function bar($event) {
        dump($event->__toString());
    }
}

// action as callable
Trigger::on('*', 'heartbeat', 'Foo@bar');
Trigger::on('*', 'heartbeat', ['Foo', 'bar']);

// action as Closure
Trigger::on('*', 'heartbeat', function($event) {
    dump($event->__toString());
});

// action as job
Trigger::on('*', 'heartbeat', 'App\Jobs\ExampleJob');