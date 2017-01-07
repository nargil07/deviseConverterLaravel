<?php

namespace App\Http\Controllers;

use App\Devise;
use Illuminate\Http\Request;

class DeviseController extends Controller
{
    public function all(){
        return response()->json(Devise::select("nom","identifiant")->get()->all());
    }
    public function detail($identifiant){
        $devise = Devise::where('identifiant', '=', $identifiant)->get()->first();
        return response()->json($devise);
    }
    public function convert($idFrom, $idTo, Request $request){
        $deviseFrom = Devise::where('identifiant', '=', $idFrom)->get()->first();

        $deviseTo = Devise::where('identifiant', '=', $idTo)->get()->first();
        if($deviseTo != null && $deviseFrom != null){
            return response()->json(round((($deviseTo->valeur * $request->value )/ $deviseFrom->valeur),2));
        }else{
            return response()->json(null);
        }

    }
}
