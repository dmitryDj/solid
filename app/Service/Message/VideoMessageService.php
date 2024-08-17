<?php

namespace App\Service\Message;

use App\Models\Message\ImageMessage;
use App\Models\Message\TextMessage;
use App\Models\Message\VideoMessage;
use App\Service\Message\Interfaces\MessageServiceInterface;
use Illuminate\Http\Request;

class VideoMessageService implements MessageServiceInterface
{

    public function create(Request $request)
    {
        return VideoMessage::create($request->all());
    }

    public function show(TextMessage|VideoMessage|ImageMessage $message): VideoMessage|ImageMessage
    {
        return $message;
    }

    public function update(Request $request, TextMessage|VideoMessage|ImageMessage $message)
    {
        return $message->update($request->all());
    }

    public function delete(TextMessage|VideoMessage|ImageMessage $message)
    {
        return $message->delete();
    }
}
