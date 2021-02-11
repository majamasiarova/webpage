<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdController extends Controller
{

    public function add()
    {
        return view('ad.add');
    }

    public function delete()
    {
        return view('ad.delete');
    }

    public function view()
    {
        return view('ad.view');
    }


}
