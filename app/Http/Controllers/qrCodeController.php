<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\adminmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class lazyController extends Controller
{
    //
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'reg_number' => 'required',
            'unique_lazy_code' => 'required'
        ]);
        $thecode = adminmodel::find($request->unique_lazy_code);

        if ($thecode != null){
            if($thecode != "used"){
                $lazyCopy = $thecode->unique_lazy_code;
                Users::create($formFields);
                $thecode->used_unique_lazy_code = $thecode->unique_lazy_code;
                $thecode->unique_lazy_code = " ";
                $thecode->save();
                return view('IT_Letter_2023', [
                    'student' => users::find($lazyCopy)
                ]);
            }else{
                return view('unWiseLazyStudent');
            }
        }else{
            return view('unWiseLazyStudent');
        }
    }

    public function store2(){

        return view('theLazyClassRep', [
            'codes' => adminmodel::all()
        ]);
    }
    // public function clear($thecode)
    // {
    //     $lazyUser = users::find($thecode->unique_lazy_code);
    //     $agd = Users::find($request->agdid);
    //     $farmer->claim_state = $request->claim_state;
    //     $farmer->agdid = $request->agdid;
    //     $farmer->no_of_fertilizers = $request->no_of_fertilizers;
    //     $farmer->fertilizer_type = $request->fertilizer_type;
    //     $farmer->fertilizer_type2 = $request->fertilizer_type2;
    //     $agd->Cu_fertilizers = $agd->Cu_fertilizers - $request->no_of_fertilizers;
    //     $agd->Cl_fertilizers = $agd->Cl_fertilizers + $request->no_of_fertilizers;
    //     $agd->amtToBePaid = $agd->amtToBePaid + fertilizer::fertilizerPriceSum();

    //     $farmer->save();
    //     $agd->save();

    //     return view('confirmation', compact('farmer'));
    // }
}
