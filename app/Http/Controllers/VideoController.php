<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function show(Video $video)
    {
        return view('video.show', compact('video'));
    }
}
