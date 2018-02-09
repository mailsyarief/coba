<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'selamat datang di index';
//        return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);

    }

    public function about()
    {
        $title = 'selamat datang di about';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $title = 'selamat datang di services';
        return view('pages.services')->with('title', $title);
    }

}
