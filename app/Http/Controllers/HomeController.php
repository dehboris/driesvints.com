<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;

final class HomeController
{
    public function __invoke()
    {
        $posts = Post::published()->orderByDesc('published_at')->limit(5)->get();

        return view('home', compact('posts'));
    }
}
