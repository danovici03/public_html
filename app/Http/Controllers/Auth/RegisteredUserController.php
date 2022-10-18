<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'adress' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'county' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'specialization' => ['required', 'string', 'max:255'],
            'working_at' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'adress' => $request->adress,
            'city' => $request->city,
            'county' => $request->county,
            'phone' => $request->phone,
            'specialization' => $request->specialization,
            'working_at' => $request->working_at,
            
        ]);

        if (request()->hasFile(key:'ci_doctor')) {
            $ci_doctor = request()->file(key:'ci_doctor')->getClientOriginalName();
            request()->file(key:'ci_doctor')->storeAs(path:'docs',name:$user->id . '/' . $ci_doctor, options:'');
            $user->update(['ci_doctor'=>$ci_doctor]);
        }
        if (request()->hasFile(key:'cuim_doctor')) {
            $cuim_doctor = request()->file(key:'cuim_doctor')->getClientOriginalName();
            request()->file(key:'cuim_doctor')->storeAs(path:'docs',name:$user->id . '/' . $cuim_doctor, options:'');
            $user->update(['cuim_doctor'=>$cuim_doctor]);
        }
        if (request()->hasFile(key:'avis_libera_practica')) {
            $avis_libera_practica = request()->file(key:'avis_libera_practica')->getClientOriginalName();
            request()->file(key:'avis_libera_practica')->storeAs(path:'docs',name:$user->id . '/' . $avis_libera_practica, options:'');
            $user->update(['avis_libera_practica'=>$avis_libera_practica]);
        }
        if (request()->hasFile(key:'profile_image')) {
            $profile_image = request()->file(key:'profile_image')->getClientOriginalName();
            request()->file(key:'profile_image')->storeAs(path:'docs',name:$user->id . '/' . $profile_image, options:'');
            $user->update(['profile_image'=>$profile_image]);
        }
        if (request()->hasFile(key:'parafa_semnatura')) {
            $parafa_semnatura = request()->file(key:'parafa_semnatura')->getClientOriginalName();
            request()->file(key:'parafa_semnatura')->storeAs(path:'docs',name:$user->id . '/' . $parafa_semnatura, options:'');
            $user->update(['parafa_semnatura'=>$parafa_semnatura]);
        }

        $user->attachRole('4'); 

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
