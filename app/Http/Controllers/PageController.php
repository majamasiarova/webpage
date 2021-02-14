<?php


namespace App\Http\Controllers;


class PageController extends Controller
{

    public function index()
    {
        return view('page.index');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function about()
    {
        return view('page.about');
    }


}
