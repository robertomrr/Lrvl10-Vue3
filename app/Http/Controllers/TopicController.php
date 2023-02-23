<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        echo 'Topic Controllers';
        // return Inertia::render('Topics/Index', [
        //     'topics' => Topic::all()
        // ]);
    }
}
