<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Solicitadesign;

class SolicitadesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitadesign = Solicitadesign::all();
        return view('solicitadesign/index',compact('solicitadesign'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitadesign/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitadesign = new Solicitadesign($request->all());

        $batata = DB::table('solicitadesigns')->where('mes',$solicitadesign->mes)->first();

        if(!$batata){
            
            $solicitadesign->save();
            return redirect(url('/solicitadesign'))->with('success','Informação cadastrada com sucesso!');
        }
         if($batata){
            return redirect(url('/solicitadesign'))->with('error','Erro, Mes ja existente, tente alterar-lo!');
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
        $solicitadesign = Solicitadesign::find($id);
        return view('solicitadesign/edit',compact('solicitadesign'));
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
        $solicitadesign = Solicitadesign::find($id);
        $solicitadesign->fill($request->all());
        $solicitadesign->save();
        return redirect(url('/solicitadesign')); 
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
