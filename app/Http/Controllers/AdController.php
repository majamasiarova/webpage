<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{

    public function add()
    {
        return view('ad.add');
    }

    public function delete(Ad $ad)
    {
        $ad->delete();
    }

    public function view(string $kategoria)
    {
        $ads = Ad::where('category', $kategoria)
            ->get();
        return view('ad.view', ['ads' => $ads, 'loggedUser' => Auth::user()]);
    }

    public function create(Request $request)
    {
        $ad = new Ad();
        $ad->user_id = Auth::id();

        $this->fillAndSave($request, $ad);

        return redirect()->route('ad.view', ['kategoria' => $ad->category]);
    }

    public function update(Request $request, Ad $ad)
    {
        $this->fillAndSave($request, $ad);
    }

    public function fillAndSave(Request $request, Ad $ad)
    {
        $ad->description = $request->popis;
        $ad->category = $request->kategoria;
        $ad->price = $request->cena;
        $ad->name = $request->nazov;
        $ad->location = $request->lokalita;

        $ad->save();
    }

    public function mine(){
        $ads = Ad::where('user_id',Auth::id())
            ->get();
        return view('ad.view', ['ads' => $ads, 'loggedUser' => Auth::user()]);
    }


}
