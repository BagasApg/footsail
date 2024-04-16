<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FieldClass;

class FieldController extends Controller
{
    public function index(){
        $classes = FieldClass::all();
        $fields = Field::all();
        // dd($fields->fieldClass);
        return view('field', compact('fields', 'classes'));
    }

    public function book(Request $request){
        // dd(Field::find($request->id));
        $field = Field::find($request->id);
        if(is_null($field)){
            return redirect()->route('field.index');
        }
        return view('book', compact('field'));
    }
}
