<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receipe;

class ReceipeController extends Controller
{
    public function index() {


    	$data = Receipe::all();
    	return view('home', compact('data'));
    }
}
