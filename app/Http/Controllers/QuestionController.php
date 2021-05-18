<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        // $questions =Question::latest()->get();
        return view('questions.index',[
            'questions' =>auth()->user()->timeline()
        ]);
    }
    public function store()
    {
        $attributes=request()->validate(['body' => 'required|max:255']);
        Question::create([
            'user_id'=>auth()->id(),
            'body'=>$attributes['body']
        ]);
        return redirect()->route('home');
        return redirect('/questions');
    }

}
