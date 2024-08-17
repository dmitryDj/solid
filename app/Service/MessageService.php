<?php

namespace App\Service;


use App\Models\Message\ImageMessage;
use App\Models\Message\TextMessage;
use App\Models\Message\VideoMessage;

class MessageService
{
    public function create($data)
    {
        $textMessage = new TextMessage();
        $text = $textMessage->trimText($data['text']);
        $data['text'] = $textMessage->capitalizeText($text);

        if (isset($data['image_url'])) {
            $message = new ImageMessage();
            $data['image_url'] = $message->setSize($data['image_url']);
            return $message->create($data);
        }

        if (isset($data['video_url'])) {
            $message = new VideoMessage();
            $data['video_url'] = $message->setVideoHost($data['video_url']);
            return $message->create($data);
        }

        return $textMessage->create($data);
    }

    public function update($message, $data)
    {
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
    }
}
