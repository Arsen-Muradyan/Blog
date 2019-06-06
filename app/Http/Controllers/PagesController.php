<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
class PagesController extends Controller
{
    public function index() {
        if (auth()->guest()) {
            return view('pages.home');
        } else {
            return redirect('/posts');
        }
    }
}
