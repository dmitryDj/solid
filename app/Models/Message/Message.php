<?php

namespace App\Models\Message;

use App\Models\Message\Interfaces\TextMessageInterface;
use Illuminate\Database\Eloquent\Model;

class Message extends Model implements TextMessageInterface
{
    protected $table = 'messages';

    const TYPE_TEXT = 'text';
    const TYPE_IMAGE = 'image';
    const TYPE_VIDEO = 'video';

    protected $fillable = [
        'text',
        'image_url',
        'video_url',
    ];

    public function trimText(string $str): string
    {
        return trim($str);
    }

    public function capitalizeText(string $str): string
    {
        return strtoupper($str);
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
