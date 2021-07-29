<?php

namespace App\Http\Controllers; // @Piotr <-- that's a new one - hmm - PHP Namespaces provide a way in which to group related classes, interfaces, functions and constants

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Picture; // @Piotr - "facades" - 

class PictureController extends Controller
{
    /**
     * Display a listing of all submitted dogs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::all(); // @Piotr - another guess - using "::" to access protected $fillable

        return view('index', ['pictures' => $pictures]); // @Piotr - returns view "index", 
    }

    /**
     * Show the form for uploading a new dog.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Handle the form submission and save the uploaded dog
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // See PictureControllerTest to see what this should do
    }

    /**
     * Upvote a dog by ID
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upvote(Request $request, Picture $picture)
    {
        
    }
}
