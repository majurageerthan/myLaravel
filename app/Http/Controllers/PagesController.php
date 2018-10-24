<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function index()
    {
        $title = 'Welcome to Laravel';
        return view('Pages.about')->with('title', $title);
    }
}
