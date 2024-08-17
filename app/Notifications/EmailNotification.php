<?php

namespace App\Notifications;

use App\Interfaces\NotificationInterface;

class EmailNotification implements NotificationInterface
{

    public function send(string $to, string $message): void
    {
        echo "Отправка email {$to}: {$message}\n";
    }
}
