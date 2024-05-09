<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Log;

use App\Models\Evenement;
use App\Models\Front;
use App\Models\Galerie;
use App\Models\Item;
use App\Models\Reservation;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function accueil()
    {
        $fronts=Front::all();
        $items=Item::where('statut',1)->limit(6)->get();
        $enevs=Evenement::where('statut',1)->limit(6)->get();
        $galeries=Galerie::where('statut',1)->limit(6)->get();
        // dd($items);
        return view('front.accueil',compact('fronts','items','enevs','galeries'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function allItem()
    {
        $fronts=Front::all();
        $items=Item::where('statut',1)->limit(6)->get();
        // dd($items[0]->getComd);
        return view('front.allitem',compact('fronts','items'));
        
    }

    public function detailItem($slug)
    {
        $item=Item::where('name',$slug)->first();
        // dd($item);
        return view('front.detail',compact('item'));
    }

    public function service()
    {
        
        return view('front.service');
    }
    public function faq()
    {
        
        return view('front.faq');
    }

    public function reserver(Request $request)
    {

        Log::info($request->all());
        // $datas=$request->request->all();
        $messages = [
            'nom.required' => 'Le nom est obligatoire',
           
            'contact.required' => 'Le contact est obligatoire',
            'arriver.required' => 'Le email est obligatoire',
            'depart.required' => 'Le mot de passe est obligatoire',
            // 'service_id.required' => 'Le service est obligatoire',
           
           
        ];
    
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:500',
            // 'prenom' => 'required|max:500',
            'contact' => 'required|max:500',
      
            'date_debut' => 'required',
            'date_fin' => 'required',
            
        ],$messages);

        if ($validator->fails()) {
            return response()->json([
                "code"=>0,
                "data"=>null,
                "message"=>"Les parametres sont mal renseigner !!!",
            ], 200);
        }

        $reservation=new Reservation();
        $reservation->name=$request->name;
        $reservation->tel=$request->contact;
        if (isset($request->email)) {
            $email=$request->email;
        } else {
           $email=null;
        }
        $reservation->email=$email;
        $reservation->date_debut=$request->date_debut;
        $reservation->date_fin=$request->date_fin;
        if (isset($request->item_id)) {
            $item_id=$request->item_id;
        } else {
           $item_id=null;
        }
        $reservation->item_id=$item_id;
        $reservation->save();
        
        return response()->json([
            "statut"=>200,
            "data"=>null,
            "message"=>"Reservation enregistré avec succès ",
        ], 200);



    }
}
