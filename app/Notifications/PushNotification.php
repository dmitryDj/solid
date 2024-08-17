<?php

namespace App\Notifications;

use App\Interfaces\NotificationInterface;

class PushNotification implements NotificationInterface
{

    public function send(string $to, string $message): void
    {
        echo "Отправка Пуш уведомления {$to}: {$message}\n";
    }
}
