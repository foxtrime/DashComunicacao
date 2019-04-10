<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Jorgeface;

class FacejorgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facejorge = Jorgeface::all();
        return view('facejorge/index',compact('facejorge'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facejorge/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facejorge = new Jorgeface($request->all());

        $batata = DB::table('jorgefaces')->where('mes',$facejorge->mes)->first();

        if(!$batata){
            
            $facejorge->save();
            return redirect(url('/facejorge'))->with('success','Informação cadastrada com sucesso!');
        }
         if($batata){
            return redirect(url('/facejorge'))->with('error','Erro, Mes ja existente, tente alterar-lo!');
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
        $facejorge = Jorgeface::find($id);
        return view('facejorge/edit',compact('facejorge'));
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
        $facejorge = Jorgeface::find($id);
        $facejorge->fill($request->all());
        $facejorge->save();
        return redirect(url('/facejorge')); 
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
