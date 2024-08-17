<?php

namespace App\Notifications;

use App\Interfaces\NotificationInterface;

class SmsNotification implements NotificationInterface
{

    public function send(string $to, string $message): void
    {
        echo "Отправка SMS {$to}: {$message}\n";
    }
}
