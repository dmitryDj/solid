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

        $message = new TextMessage();
        $text = $message->trimText($data['text']);
        $data['text'] = $message->capitalizeText($text);

        if (isset($data['image_url'])) {
            $message = new ImageMessage();
            $data['image_url'] = $message->setSize($data['image_url']);
            $message->create($data);
        } elseif (isset($data['video_url'])) {
            $message = new VideoMessage();
            $data['video_url'] = $message->setVideoHost($data['video_url']);
            $message->create($data);
        } else {
            $message->create($data);
        }

        return to_route('messages.index');
    }

    public function edit(Message $message)
    {
        return view('messages.edit', compact('message'));
    }

    public function update(Request $request, Message $message)
    {
        $data = $request->input();

        $textMessage = new TextMessage();
        $text = $textMessage->trimText($data['text']);
        $data['text'] = $textMessage->capitalizeText($text);

        if (isset($data['image_url'])) {
            $imageMessage = new ImageMessage();
            $data['image_url'] = $imageMessage->setSize($data['image_url']);
        }

        if (isset($data['video_url'])) {
            $videoMessage = new VideoMessage();
            $data['video_url'] = $videoMessage->setVideoHost($data['video_url']);
        }

        $message->update($data);

        return to_route('messages.index');
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return to_route('messages.index');
    }
}
