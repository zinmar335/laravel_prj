<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

    	$name = "MY HOME";
    	return view('home', compact('name'));
    }

    public function php() {

    	$name = "PHP Page";
    	$data = array(
    		'lesson1' => 'this is php lesson1',
    		'lesson2' => 'this is php lesson2',
    		'lesson3' => 'this is php lesson3'
    	);
    	return view('php', compact('name', 'data'));
    }

    public function js() {

    	$name = "JS Page";
    	$data = array(
    		'lesson1' => 'this is js lesson1',
    		'lesson2' => 'this is js lesson2',
    		'lesson3' => 'this is js lesson3'
    	);
    	return view('js', compact('name', 'data'));
    }
}
