<?php

namespace App\Models\Message;

use App\Models\Message\Interfaces\VideoMessageInterface;

class VideoMessage extends Message implements VideoMessageInterface
{
    const VIDEO_HOST = 'https://www.youtube.com/';

    public function setVideoHost()
    {
        self::VIDEO_HOST . $this->video_url;
    }
}
