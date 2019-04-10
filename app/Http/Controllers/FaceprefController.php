<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Prefface;

class FaceprefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facepref = Prefface::all();
        return view('facepref/index',compact('facepref'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facepref/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facepref = new Prefface($request->all());

        $batata = DB::table('preffaces')->where('mes',$facepref->mes)->first();

        if(!$batata){
            
            $facepref->save();
            return redirect(url('/facepref'))->with('success','Informação cadastrada com sucesso!');
        }
         if($batata){
            return redirect(url('/facepref'))->with('error','Erro, Mes ja existente, tente alterar-lo!');
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
        $facepref = Prefface::find($id);
        return view('facepref/edit',compact('facepref'));
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
        $facepref = Prefface::find($id);
        $facepref->fill($request->all());
        $facepref->save();
        return redirect(url('/facepref')); 
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
