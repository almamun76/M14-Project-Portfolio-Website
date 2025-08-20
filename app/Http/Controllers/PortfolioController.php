<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // controller method to return views>portfolio>home.blade.php view template
    public function home(){
        return view('portfolio.home');
    }

    // controller method to return views>portfolio>about.blade.php view template
    public function about(){
        return view('portfolio.about');
    }

    // controller method to return views>portfolio>projects.blade.php view template
    public function projects(){
        return view('portfolio.projects');
    }

    // controller method to return views>portfolio>contact.blade.php view template
    public function contact(){
        return view('portfolio.contact');
    }
    
    // controller method to return views>portfolio>blog.blade.php view template
    public function blog(){
        return view('portfolio.blog');
    }
}
