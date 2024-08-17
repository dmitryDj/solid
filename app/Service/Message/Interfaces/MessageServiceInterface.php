<?php

namespace App\Service\Message\Interfaces;

use App\Models\Message\ImageMessage;
use App\Models\Message\TextMessage;
use App\Models\Message\VideoMessage;
use Illuminate\Http\Request;

interface MessageServiceInterface
{
    public function create(Request $request);
    public function show();
    public function update();
    public function delete();
}
