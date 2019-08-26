<?php

require __DIR__ . '/../../vendor/autoload.php';

use Structural\Decorator\NotificationLibrary\Facebook;
use Structural\Decorator\NotificationLibrary\Notifier;
use Structural\Decorator\NotificationLibrary\Slack;

$service = new Facebook(new Slack(new Notifier));
echo $service->send("Hello Mohamed,\r\nYou father needs your help, harry up!");
