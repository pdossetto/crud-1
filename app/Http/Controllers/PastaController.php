<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasta;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paste = Pasta::all();
        return view('pastas.index', compact('paste'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pastas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|unique:pastas|max:50',
            'type' => 'required|max:20'
        ]);

        $new_pasta = new Pasta();
        // $new_pasta->title = $data['title'];
        // $new_pasta->description = $data['description'];
        // $new_pasta->type = $data['type'];
        // $new_pasta->image = $data['image'];
        // $new_pasta->cooking_time = $data['cooking_time'];
        // $new_pasta->weight = $data['weight'];
        $new_pasta->fill($data);
        $new_pasta->save();

        return redirect()->route('pastas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pasta $pasta)
    {
        //dd($pasta);
        return view('pastas.show', compact('pasta'));
        //$dettaglio_pasta = Pasta::find($id);
        //echo $dettaglio_pasta['description'];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasta = Pasta::findOrFail($id);
        // if($pasta) {
        //     return view('pastas.edit', compact('pasta'));
        // }
        // abort(404);
        return view('pastas.edit', compact('pasta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasta $pasta)
    {
        $data = $request->all();
        $pasta->update($data);
        return redirect()->route('pastas.show', $pasta['id']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasta $pasta)
    {
        $pasta->delete();
        return redirect()->route('pastas.index'); 
    }
}
