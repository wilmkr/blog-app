<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        $title = "About Page";

        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'SEO', 'Programming']
        ];
        
        return view('pages.services')->with($data);
    }
}
