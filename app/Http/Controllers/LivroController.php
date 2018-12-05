<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',['livro' => Livro::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $livro = new Livro();
        
        return view('create',compact('livro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livro = new Livro();
        
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->resumo = $request->resumo;

        $livro->save();

        return view('home', ['livro' => Livro::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = Livro::find($id);
        return view('edit', compact('livro', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $livro = Livro::find($id);

        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->resumo = $request->resumo;

        $livro->update();

        return redirect('livro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        
        $livro = Livro::find($id);

        $livro->delete();
        
        return redirect('livro');
    }
}
