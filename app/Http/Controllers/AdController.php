<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class AdController extends Controller
{

    public function add()
    {
        return view('ad.add');
    }

    public function delete(Ad $ad)
    {
        if (Auth::id() == $ad->user_id || Auth::user()->isAdmin()) {
            $ad->delete();
            return response()->json(['success' => true], 200);
        }
        return response()->json(['success' => false], 400);
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

        $request->validate($this->getRules());
        $this->fillAndSave($request, $ad);

        $request->session()->flash('status', 'Inzerát bol úspešne vytvorený');
        return redirect()->route('ad.view', ['kategoria' => $ad->category]);
    }

    public function update(Request $request, Ad $ad)
    {
        //https://stackoverflow.com/a/17098374
        $validator = Validator::make($request->all(), $this->getRules());
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ], 400);
        }
        $this->fillAndSave($request, $ad);
        return response()->json(['success' => true], 200);
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

    public function mine()
    {
        $ads = Ad::where('user_id', Auth::id())
            ->get();
        return view('ad.view', ['ads' => $ads, 'loggedUser' => Auth::user()]);
    }

    private function getRules()
    {
        return [
            'popis' => 'required',
            'nazov' => 'required',
            'cena' => 'required|numeric',
            'lokalita' => 'required',
            'kategoria' => [
                'required',
                Rule::in([
                    "Autá", "Oblečenie", "Elektronika", "Dom a záhrada", "Reality, Byty, Domy", "Stroje",
                    "Mobily", "Motorky", "Práca", "Počítače", "Hudba", "Zvieratá", "Ostatné",
                    "Služby", "Knihy", "Nábytok", "Športové potreby", "Zdravie a krása",
                    "Deti a detské potreby"
                ])
            ],
        ];
    }
}
