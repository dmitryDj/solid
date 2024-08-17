<?php

namespace App\Models\Message;

use App\Models\Message\Interfaces\TextMessageInterface;
use Illuminate\Database\Eloquent\Model;

class Message extends Model implements TextMessageInterface
{
    protected $table = 'messages';

    protected $fillable = [
        'text',
        'image_url',
        'video_url',
    ];

    public function trimText(): string
    {
        return trim($this->text);
    }

    public function capitalizeText(): string
    {
        return strtoupper($this->text);
    }

    public function getTypeMessage(): string
    {
        return match (true) {
            !is_null($this->video_url) => 'video',
            !is_null($this->image_url) => 'image',
            !is_null($this->text) => 'text',
            default => 'unknown type of message',
        };
    }
}
