<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticViewsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view(app()->getLocale().'.about');
    }

    public function classes()
    {
        return view(app()->getLocale().'.classes');
    }

    public function eventNews()
    {
        return view(app()->getLocale().'.event-news');
    }

    public function beMember()
    {
        return view(app()->getLocale().'.be-a-member');
    }

    public function contact()
    {
        return view(app()->getLocale().'.contact');
    }
}
