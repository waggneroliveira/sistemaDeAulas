<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $question = Question::with('options')
            ->where('active', 1)->first();

        return view('Client.pages.home',[
            'question' => $question
        ]);
    }

    public function store(Request $request){
        $data = $request->input;



        return redirect()->route('home');
    }
}
