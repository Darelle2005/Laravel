<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cni;
use App\Models\passport;
use App\Models\licence;
use App\Models\others;
use Illuminate\Support\Facades\Session; 

//carbon ,classe manipulant les dates et les heures sur laravel


class cnicontroller extends Controller
{
  
    public function traiterFormulaire(Request $request)
    {
        //dd($request);
         $data=$request->validate([
         'type'=>'required',
         'name'=> 'required',
        'surname' => 'required',
         'reference' => 'required',
        'localisation' => 'required',
        'contact' => 'required',
       'img'=>'required',
        ]);
       // $newModele = cni::create($data);
        $typeSelectionne = $request->input('type');

    switch ($typeSelectionne) {
        case 'cni':
            Cni::create($request->all());
            break;

        case 'passport':
            Passport::create($request->all());
            break;

        case 'licence':
            Licence::create($request->all());
            break;
        default:
            // Gestion d'une option par défaut ou une erreur
            break;
   //message d'alerte
  
   Session::flash('Le document a été signaler'); 
  
//redirection
        return redirect()->back();
    
    }
}
}