<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title as Title;

class HomeController extends Controller
{
    public function __construct(Title $titles)
    {
        $this->titles = $titles->all();
    }

    public function di()
    {
        dd($this->titles);
    }

    // php artisan make:controller HomeController
    public function index()
    {
        // return views
        // return redirects
        return view('home.index');
    }

    public function about()
    {
        // return views
        // return redirects
        return view('home.about');
    }
}
