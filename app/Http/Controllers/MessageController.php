<?php

namespace App\Http\Controllers;

use App\Models\Message\ImageMessage;
use App\Models\Message\Message;
use App\Models\Message\TextMessage;
use App\Models\Message\VideoMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::paginate(15);

        return view('messages.index', compact('messages'));
    }

    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // Message вместо if else
        if (isset($data['image_url'])) {
            $message = ImageMessage::create($data);
        } elseif (isset($data['video_url'])) {
            $message = VideoMessage::create($data);
        } else {
            $message = TextMessage::create($data);
        }

        return to_route('messages.index');
    }

    public function show(Message $message)
    {
        return view('messages.show', compact('message'));
    }

    public function update(Request $request, $message)
    {
        $data = $request->all();

        return to_route('messages.index');
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return to_route('messages.index');
    }
}
