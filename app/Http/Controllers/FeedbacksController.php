<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feedback.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.create');
    }


    public function store(Request $request)
    {
        
        $attributes= request()->validate([
            
            'name' =>'required',
            'mobile' =>'required|integer',
            'feedback' =>'required|max:255',

            ]);

            Feedback::create([
            'name'=> $attributes['name'],
            'mobile' => $attributes['mobile'],
            'feedback' => $attributes['feedback'],
        ]);

        return redirect()->route('feedback.create');


    }

}
