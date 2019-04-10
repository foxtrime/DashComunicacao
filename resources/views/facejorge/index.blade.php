@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Imprensa</h1>
@stop

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

<div class="box box-info">
    <div class="box-header ui-sortable-handle" style="padding-bottom: 20px;
    ">
        <!-- tools box -->
        <div class="pull-right box-tools">
        <a href="{{ url("/facejorge/create")}}" type="button" class="btn btn-info btn-sm">
            <i class="fa fa-plus"></i></a>
        </div>
        <!-- /. tools -->
    </div>

    <table id="relatorios" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead>
            <tr>
                <th>Total seguidores</th>
                <th>Envolvimento</th>
                <th>Total Curtidas</th>
                <th>Crescimento</th>
                <th>Total Publicações</th>
                <th>Reações</th>
                <th>Comentarios</th>
                <th>Mes</th>
                <th class="disabled-sorting text-right">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facejorge as $dado)
                <tr>
                    <td>{{$dado->total_seguidores}}</td>
                    <td>{{$dado->envolvimento}}</td>
                    <td>{{$dado->total_curtidas}}</td>
                    <td>{{$dado->crescimento}}</td>
                    <td>{{$dado->total_publicacoes}}</td>
                    <td>{{$dado->reacoes}}</td>
                    <td>{{$dado->comentarios}}</td>
                    <td>{{$dado->mes}}</td>
                    <td><a href="{{ url("facejorge/$dado->id/edit")}}"
                        class="btn btn-warning btn-xs action  pull-right botao_acao btn_control" 
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        title="Editar Relatorio">  
                        <i class="glyphicon glyphicon-pencil "></i>
                    </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    
    </table>
        
       
</div>
@stop