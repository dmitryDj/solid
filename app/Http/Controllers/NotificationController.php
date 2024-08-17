<?php

namespace App\Http\Controllers;


use App\Notifications\EmailNotification;
use App\Notifications\PushNotification;
use App\Notifications\SmsNotification;
use App\Service\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected NotificationService $notificationService;

    public function __construct()
    {
        /**
         * еще как вариант можно глобально указать через что отправлять уведомление в AppServiceProvider "register"
         * $this->app->bind(NotificationInterface::class, EmailNotification::class); // SmsNotification | PushNotification
         */
        $notification = new SmsNotification();
//        $notification = new EmailNotification();
//        $notification = new PushNotification();
        $this->notificationService = new NotificationService($notification);
    }

    public function index()
    {
        return view('notifications.index');
    }

    public function sendNotification(Request $request)
    {
        $to = $request->input('to');
        $message = $request->input('message');

        $this->notificationService->sendNotification($to, $message);
    }
}
