<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Status;

class QuestionnaireController extends Controller
{

	public function __construct() {
		$this->middleware('auth');
	}
    public function create() {

    	return view('questionnaire.create');
    }

    public function store(Request $request) {
    	
    	
    	$var = $request->input('status');
	    $vect = ["hartie","foarfeca","piatra"];
		$rand = rand(0,2);
		$isWin =false;
		
        $computer = "Computer a ales ". $vect[$rand];
        $player = "Tu ai ales ".$var;
        
		if($var == $vect[$rand]) {
            $win ="Egalitate";
		}
		if($var == "hartie" && $vect[$rand] =="piatra" || $var == "foarfeca" && $vect[$rand] =="hartie") { 
			$isWin = true;
			$win="Ai castigat";		
		}
		if($var == "piatra" && $vect[$rand] =="hartie" || $var == "hartie" && $vect[$rand] =="foarfeca") 
			$win="Ai pierdut";
		
    	$data['status'] = $win;
    	$data['name'] = auth()->user()->name;
    	$status = \App\Status::create($data);
    	// return redirect('/questionnaires/'.$status->name." You");
        
        return view('questionnaire.show',[
            'computer'=>$computer,
            'player'=>$player,
            'win'=>$win,]);
    }

    public function show() {
    	
    	return view('questionnaire.show');
    }


    public function top() {
        
        $data['data'] = DB::table('statuses')->Select('name',DB::raw('count(status) as count'))->groupBy('name')->orderBy('count','DESC')->get();
        // print_r($data);
        return view('top',$data);

    }

    public function istoric() {
    	$data['data'] = DB::table('statuses')->where('name', auth()->user()->name)->get();
    	return view('istoric', $data);
    }
}