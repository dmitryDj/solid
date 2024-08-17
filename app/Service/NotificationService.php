<?php

namespace App\Service;


use App\Interfaces\NotificationInterface;

class NotificationService
{
    protected NotificationInterface $notification;

    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function sendNotification(string $to, string $message): void
    {
        $this->notification->send($to, $message);
    }
}
