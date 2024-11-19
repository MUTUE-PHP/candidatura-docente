<?php

namespace App\Http\Controllers;

use App\Models\nacionalidade;
use Illuminate\Http\Request;

class NacionalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
/*       $data['dados_nacionalidade'] = nacionalidade::all();
        return inertia('dados_pessoais', $data);
*/
        $data = nacionalidade::all();
        return response()->json(['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(nacionalidade $nacionalidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nacionalidade $nacionalidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nacionalidade $nacionalidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nacionalidade $nacionalidade)
    {
        //
    }
}
