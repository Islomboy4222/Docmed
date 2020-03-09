<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function home()
    {
        $doctors = [
            ['name' => 'Orinov Abror', 'type' => 'Stomatolog'],
            ['name' => 'Hasanzoda Otaxon Mirzo', 'type' => 'Xirurg'],
            ['name' => 'Bobojonov Bobojon',  'type' => 'Okusher'],
            ['name' => 'John Doe', 'type' => 'Ginekolog'],
        ];
        return view('home', compact('doctors')); //['doctors'] => $doctors <=> compact('doctors')
    }
    public function services()
    {
        return view('services');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function news()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(2);
        $links = $posts->links();
        return view('news', compact('posts', 'links'));
    }
    public function newsMore($id)
    {
        $post = Post::findOrFail($id);
        //dd($post); 
        return view('news-more', [
            'post' => $post
        ]);
    }
}
