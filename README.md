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
Configure
+----------+--------------+
| Name     | Value        |
+----------+--------------+
| Host     | 192.168.*.*  |
| Port     | 3306         |
| User     | ***********  |
| Password | ***********  |
+----------+--------------+
BinLogInformation
+----------------+------------+
| Parameter      | Value      |
+----------------+------------+
| BinLogFileName | log.000619 |
| BinLogPosition | 894538     |
+----------------+------------+
+------------------------------------------+-----------+
| Subscriber                               | Registerd |
+------------------------------------------+-----------+
| App\Listeners\HeartbeatSubscriber        | √         |
| Huangdijia\Trigger\Subscribers\Trigger   | √         |
| Huangdijia\Trigger\Subscribers\Terminate | √         |
| Huangdijia\Trigger\Subscribers\Heartbeat | √         |
+------------------------------------------+-----------+

Trigger running
~~~