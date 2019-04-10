<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imprensa;

class ImprensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imprensa = Imprensa::all();
        //dd($imprensa);
        return view('imprensa/index',compact('imprensa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imprensa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imprensa = new Imprensa($request->all());

        $batata = DB::table('imprensas')->where('mes',$imprensa->mes)->first();

        if(!$batata){
            
            $imprensa->save();
            return redirect(url('/imprensa'))->with('success','Informação cadastrada com sucesso!');
        }
         if($batata){
            return redirect(url('/imprensa'))->with('error','Erro, Mes ja existente, tente alterar-lo!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imprensa = Imprensa::find($id);
        return view('imprensa/edit',compact('imprensa'));
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
        $imprensa = Imprensa::find($id);
        $imprensa->fill($request->all());
        $imprensa->save();
        return redirect(url('/imprensa')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
