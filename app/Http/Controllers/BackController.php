<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Hash;
use App\Models\User;

use App\Models\Evenement;
use App\Models\Front;
use App\Models\Galerie;
use App\Models\Item;
use App\Models\Reservation;
use Illuminate\Http\Request;

class BackController extends Controller
{
    //

    public function login()
    {
        return view('back.login');
    }

    public function connexion(Request $request)
    {
        $user = User::where('email', $request->email)->first();
      
        if (empty($user)) {
            return redirect()->back()->withErrors('Le mot de passe ou nom d\'utilisateur incorrecte');
        }


     
        if (!Hash::check($request->get('password'), $user->password)) {
           
            return redirect()->back()->withErrors('Le mot de passe ou nom d\'utilisateur incorrecte');
            //dd($request);
            //
        } else {

           
            Auth::guard()->login($user);

            return redirect('/accueil');
        }
    }




    public function  logout(){
        Auth::logout();
        return redirect("/");
        
    }


    public function accueil()
    {
        return view('back.accueil');
    }

    public function reservation()
    {
        $reservations=Reservation::where('statut',1)->orderBy('created_at','DESC')->paginate(10);
        return view('back.reservation',compact('reservations'));
    }

    public function galerie()
    {
        $galeries=Galerie::where('statut',1)->paginate(10);
        return view('back.galerie',compact('galeries'));
    }

    public function event()
    {
        $events=Evenement::where('statut',1)->paginate(10);
        return view('back.evenement',compact('events'));
    }


    public function chambre()
    {
        $items=Item::orderBy('created_at','DESC')->paginate(10);
        return view('back.chambre',compact('items'));
    }
    public function addChambre(Request $request)
    {

    }





    
}