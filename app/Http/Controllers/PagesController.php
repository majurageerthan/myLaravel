<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function index()
    {
        $title = 'Welcome to Laravel';
        return $title;//view('Pages.about')->with('title', $title);
    }
}
