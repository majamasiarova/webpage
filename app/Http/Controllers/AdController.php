<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

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

    public function view(string $kategoria)
    {
        $ads = Ad::where('category', $kategoria)
            ->get();
        return view('ad.view', ['ads' => $ads]);
    }

    public function create(Request $request)
    {
        $ad = new Ad();

        $ad->description = $request->popis;

        $ad->category = $request->kategoria;
        $ad->price = $request->cena;
        $ad->name = $request->nazov;
        $ad->location = $request->lokalita;

        $ad->save();


        return redirect()->route('ad.view', ['kategoria', $ad->category]);
    }


}
