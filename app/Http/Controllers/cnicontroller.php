<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Models\cni;
use App\Models\passport;
use App\Models\licence;
use App\Models\others;
*/use App\Models\pieces;
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
        'image' => 'required',
     
        ]);
        $newModele = pieces::create($data);
        
     
        
 return redirect()->back()->with('success', 'Le document a été signalé avec succès');

        
       
}
public function rechercher(Request $request)
{
// Récupérez les valeurs des champs 
         $type=$request->input('type');
         $nom = $request->input('name');
         $prenom = $request->input('surname');
         $reference = $request->input('reference');
         $email = $request->input('email');
// Commencez votre requête en utilisant le modèle approprié
        $query = pieces::query();
       
// Appli-quez des conditions 
if($nom ){
    $query->where('name', 'like', '%' . $nom . '%');
}
 if($prenom){
        $query->where('surname', 'like', '%' . $prenom . '%');
    }
if($reference){
    $query->where('reference', 'like', '%' . $reference . '%');
}    
if($type){
    $query->where('type', 'like', '%' . $type . '%');
}    
$resultats = $query->get();


if(count($resultats) != 0){
    $donneesTrouvees = 'true';

}else {
    $donneesTrouvees = 'false';

};


//return view('index', ['resultats' => $resultats, 'donneesTrouvees' => $donneesTrouvees])->with('success', 'Le document a été signalé avec succès');
//;
return view ('results', ['resultats' => $resultats, 'donneesTrouvees' => $donneesTrouvees]); 
}
public function index(){
    $query = pieces::query();
    $resultats = $query->get();
    $nb_pieces=count( $resultats);
    $nb_cni = 0;
    $nb_passport = 0;
    $nb_Licence = 0;
    $nb_autres = 0;
    foreach ($resultats as $data) {
       
        if($data['type'] == 'CNI'){
            $nb_cni=$nb_cni +1;   
        }
        if($data['type'] == 'Passport'){
            $nb_passport=$nb_passport +1;   
        }
        if($data['type'] == 'Licence'){
            $nb_Licence=$nb_Licence +1;   
        }
        if($data['type'] == 'autres'){
            $nb_autres=$nb_autres +1;   
        }
    }

    $element = [];
    $element[0] = $nb_cni;
    $element[1] = $nb_passport;
    $element[2] = $nb_Licence;
    $element[3] = $nb_autres;

    

    return view('index', [ 'element' => $element,'donneesTrouvees' => '', 'nb'=> $nb_pieces ,]);
    
}

public function details ($id){
    $piece = pieces::find($id);

return view('details' , compact('piece'));
}
}