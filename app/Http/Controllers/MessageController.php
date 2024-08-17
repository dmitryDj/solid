<?php

namespace App\Http\Controllers;

use App\Models\Message\Message;
use App\Service\MessageService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected MessageService $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

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

        $this->messageService->create($data);

        return to_route('messages.index');
    }

    public function edit(Message $message)
    {
        return view('messages.edit', compact('message'));
    }

    public function update(Request $request, Message $message)
    {
        $data = $request->all();

        $this->messageService->update($message, $data);

        return to_route('messages.index');
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return to_route('messages.index');
    }
}
