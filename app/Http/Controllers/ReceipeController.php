<?php

namespace App\Http\Controllers;

use App\Category;
use App\Receipe;
use Auth;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Receipe::where('user_id', auth()->id())->get();
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validatedData = request()->validate([
            'name'        => 'required',
            'ingredients' => 'required',
            'category'    => 'required',
        ]);

        Receipe::create($validatedData + ['user_id' => auth()->id()]);

        return redirect("receipe");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe)
    {
        // if($receipe->user_id != auth()->id()) {
        //     abort(404);
        // }
        // $this->authorize('view', $receipe);
        return view("show", compact('receipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipe $receipe)
    {
        // $this->authorize('view', $receipe);
        $category = Category::all();
        return view("edit", compact('receipe', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function update(Receipe $receipe)
    {
        $validatedData = request()->validate([
            'name'        => 'required',
            'ingredients' => 'required',
            'category'    => 'required',
        ]);

        // $this->authorize('view', $receipe);
        $receipe->update($validatedData);

        return view("show", compact('receipe'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe)
    {
        // $this->authorize('view', $receipe);
        $receipe->delete();
        return redirect('/receipe');
    }
}
