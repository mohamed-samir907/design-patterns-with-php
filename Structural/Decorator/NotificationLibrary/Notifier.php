<?php

namespace Structural\Decorator\NotificationLibrary;

/**
 * The Concrete Component 
 * defines the basic behavior, which can be altered by decorators.
 */
class Notifier implements NotificationInterface
{
    /**
     * Send message via service
     *
     * @param  string $message
     * @return string
     */
    public function send($message)
    {
        return $message . " message is sent via 'Email' \n";
    }
}