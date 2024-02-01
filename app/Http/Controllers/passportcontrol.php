<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\passport;

class passportcontrol extends Controller
{
    //
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
       
        ]);
        $newModele = passport::create($data);

        return redirect()->back();
    }
}
