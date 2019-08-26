<?php

namespace Structural\Decorator\NotificationLibrary;

/**
 * The Component 
 * declares the common interface for both wrappers and wrapped objects.
 */
interface NotificationInterface
{
    /**
     * Send message via service
     *
     * @param  string $message
     * @return string
     */
    public function send($message);
}