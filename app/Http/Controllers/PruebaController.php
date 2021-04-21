<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\prueba;
use App\Http\Resources\PruebaResource;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = prueba::paginate(2);
        return PruebaResource::collection($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = New prueba();
        $post->nombre = $request->nombre;
        $post->apellido =$request->apellido;

        if($post->save()){
            return new PruebaResource($post);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Prueba::findOrFail($id);
        return new PruebaResource($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post =Prueba::findOrFail($id);
        $post->nombre = $request->nombre;
        $post->apellido = $request->apellido;

        if ($post->save())
        {
            return new PruebaResource($post);
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Prueba::findOrFail($id);

        if($post->delete()){
            return new PruebaResource($post);
        }
    }
}
