<?php

namespace App\Service\Message;

use App\Models\Message\ImageMessage;
use App\Models\Message\TextMessage;
use App\Models\Message\VideoMessage;
use App\Service\Message\Interfaces\MessageServiceInterface;
use Illuminate\Http\Request;

class TextMessageService implements MessageServiceInterface
{

    public function create(Request $request)
    {
        return TextMessage::create($request->all());
    }

    public function show()
    {
        return $message;
    }

    public function update(Request $request)
    {
        return $message->update($request->all());
    }

    public function delete()
    {
        return $message->delete();
    }
}
