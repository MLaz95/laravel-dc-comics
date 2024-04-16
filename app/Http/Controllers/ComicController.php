<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $request->validated();

        $newComic = new Comic();
        $newComic->fill($request->all());
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        $request->validated();
        $comic->fill($request->all());
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    private function validation($data){
        $validator = Validator::make($data, [
            'title' => 'required|max:50',
            'description' => 'nullable|max:5000',
            'thumb' => 'nullable|max:1000',
            'price' => 'required|decimal:2',
            'series' => 'nullable|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required',
            'writers' => 'required',
        ], [
            
            'required' => "Il campo :attribute è obbligatorio",
            'max' => 'Il campo :attribute non può avere più di :max caratteri',
            'price.decimal' => 'Il campo price deve essere espresso nel sequente formato 0.00',
            'sale_date' => 'Il campo date deve essere una data valida'
            
        ])->validate();
    }
}
