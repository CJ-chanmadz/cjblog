<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'ABOUT PAGE';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Graphic Design', 'Web Development']
        );
        return view('pages.services')->with($data);
    }
}
