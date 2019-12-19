<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function redirectToProvider(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(){
        $user = Socialite::driver('facebook')->user();
        $social = User::where('email', $user->email)->first();
        if(!$social){
            $new = new User;
            $new->user_name = $user->name;
            $new->email = $user->email;
            $new->level = 0;
            $new->save();
            Auth::login($new);
            return redirect()->route('home');
        } else{
            Auth::login($social);
            return redirect()->route('home');
        }
    }

    public function redirectToProviderGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallbackGoogle (){
        $user = Socialite::driver('google')->user();
        $social = User::where('email', $user->email)->first();
        if(!$social){
            $new = new User;
            $new->user_name = $user->name;
            $new->email = $user->email;
            $new->level = 0;
            $new->save();
            Auth::login($new);
            return redirect()->route('home');
        } else{
            Auth::login($social);
            return redirect()->route('home');
        }
    }
}
