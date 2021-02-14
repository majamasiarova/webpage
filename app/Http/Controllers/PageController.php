<?php


namespace App\Http\Controllers;


use App\Models\Ad;

class PageController extends Controller
{

    public function index()
    {
        return view('page.index', [
            'categories' => Ad::getCategories(),
            'images' => Ad::getImages()
        ]);
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
