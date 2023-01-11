<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    
    public function index()
    {
       // Mail::to('mahdi@gmail.com')->send(new TestMail('mahdi',1998));
        $articles=Article::orderBy('id')->get();
        return view('index',compact('articles'));
    }

    public function about()
    {
        return view('about');
    
    }

}
