<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function create() {
    	return view('questionnaire.create');
    }
    
    public function store() {
    	$data= request()->validate([
    		'status'=> 'required',
    	]);
    	$data['user_id'] = auth()->user()->id;
    	$questionnaire = \App\Questionnaire::create($data);
    
    	return redirect('/questionnaires'.$questionnaire->id);
    }


}
