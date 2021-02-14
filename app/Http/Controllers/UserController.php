<?php


namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function check(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->isAdmin()) {
                return redirect()->intended(route('page.index') . '/');
            }
            return redirect()->intended(route('ad.mine'));

        }

        return back()->withErrors([
            'email' => 'Zadané údaje sú nesprávne. Skontrolujete si meno alebo heslo.',
        ]);
    }

    public function register()
    {
        return view('user.register');
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name = Str::lower($request->meno);
        $user->first_name = $request->meno;
        $user->last_name = $request->priezvisko;
        $user->email = $request->email;
        $user->location = $request->lokalita;
        $user->phone_number = $request->cislo;
        $user->password = Hash::make($request->heslo);
        $user->role_id = Role::query()
            ->where('title', 'user')
            ->value('id');
        $user->save();
        return redirect()->route('user.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('page.index') . '/');
    }
}
