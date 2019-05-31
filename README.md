# lumen-trigger-demo

## Set .env

~~~bash
cp .env.example .env
~~~

## Run

~~~bash
php artisan trigger:start
~~~

you can see:

~~~bash
Host:192.168.*.*25*
Port:3306
User:******
Password:******

starting from file:log.000619, position:218837 bin log position
Subscriber Huangdijia\Trigger\Events\TriggerEvent registered
Subscriber Huangdijia\Trigger\Events\TerminateEvent registered
Subscriber Huangdijia\Trigger\Events\HeartbeatEvent registered

Trigger running
~~~