<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fruits = Fruit::paginate(10);
        return view('fruits.index', compact('fruits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fruits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fruit $fruit)
    {
        return view('fruits.show', [
            'fruit' => $fruit,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fruit $fruit)
    {
        return view('fruits.edit', [
            'fruit' => $fruit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fruit $fruit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fruit $fruit)
    {
        //
    }
}
