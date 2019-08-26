<?php

namespace Structural\Decorator\NotificationLibrary;

/**
 * Concrete Decorators 
 * define extra behaviors that can be added to components dynamically. 
 * Concrete decorators override methods of the base decorator and execute their behavior 
 * either before or after calling the parent method.
 */
class Slack extends NotificationDecorator
{
    /**
     * Send message via service
     *
     * @param  string $message
     * @return string
     */
    public function send($message)
    {
        return parent::send($message) . $message . " message is sent via 'Slack'\n";
    }
}