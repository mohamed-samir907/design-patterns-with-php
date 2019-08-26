<?php

namespace Structural\Decorator\NotificationLibrary;

/**
 * The Base Decorator class 
 * has a field for referencing a wrapped object. The field’s type should be declared as 
 * the component interface so it can contain both concrete components and decorators. 
 * The base decorator delegates all operations to the wrapped object.
 */
class NotificationDecorator implements NotificationInterface
{
    /**
     * Notification interface
     *
     * @var \NotificationInterface
     */
    private $notificationInterface;

    /**
     * Constructor
     *
     * @param  \NotificationInterface $notificationInterface
     * @return void
     */
    public function __construct(NotificationInterface $notificationInterface)
    {
        $this->notificationInterface = $notificationInterface;
    }

    /**
     * Send message via service
     *
     * @param  string $message
     * @return string
     */
    public function send($message)
    {
        return $this->notificationInterface->send($message);
    }
}