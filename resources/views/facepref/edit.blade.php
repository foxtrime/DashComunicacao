@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Face Prefeitura</h1>
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">Cadastrar Categoria</div>
        <div class="panel-body">
            <form method="POST" action="{{ url("facepref/$facepref->id") }}">
            {!! method_field('PUT') !!}
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="seguidores">Seguidores</label>
                    <input type="text" class="form-control" name="seguidores" id="seguidores" style="width: 40%;" value="{{$facepref->seguidores}}" required>
                </div>

                <div class="form-group">
                    <label for="alcance">Alcance</label>
                    <input type="text" class="form-control" name="alcance" id="alcance" style="width: 40%;" value="{{$facepref->alcance}}" required>
                </div>

                <div class="form-group">
                    <label for="envolvimento">Envolvimento</label>
                    <input type="text" class="form-control" name="envolvimento" id="envolvimento" style="width: 40%;" value="{{$facepref->envolvimento}}" required>
                </div>

                <div class="form-group">
                    <label for="interacoes">Intereções</label>
                    <input type="text" class="form-control" name="interacoes" id="interacoes" style="width: 40%;" value="{{$facepref->interacoes}}" required>
                </div>

                <div class="form-group">
                    <label for="publicacoes">Publicações</label>
                    <input type="text" class="form-control" name="publicacoes" id="publicacoes" style="width: 40%;" value="{{$facepref->publicacoes}}" required>
                </div>

                <div class="form-group">
                    <label for="seg_insta">Seguidores Instagram</label>
                    <input type="text" class="form-control" name="seg_insta" id="seg_insta" style="width: 40%;" value="{{$facepref->seg_insta}}" required>
                </div>

                <div class="form-group">
                    <label for="mes">Mes</label>
                    <select name="mes" id="mes " class="form-control form-control error" style="width: 40%;" disabled required>  	  
                        <option value="{{$facepref->mes}}">{{$facepref->mes}}</option>
                        <option value="Jan">Janeiro</option>
                        <option value="Fev">Fevereiro</option>
                        <option value="Mar">Março</option>
                        <option value="Abr">Abril</option>
                        <option value="Mai">Maio</option>
                        <option value="Jun">Junho</option>
                        <option value="Jul">Julho</option>
                        <option value="Ago">Agosto</option>
                        <option value="Set">Setembro</option>
                        <option value="Out">Outubro</option>
                        <option value="Nov">Novembro</option>
                        <option value="Dez">Dezembro</option>
                    </select>
                </div>

                <div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-secondary" onclick = "history.back ()">Cancelar</button>
                </div>
            </form>
        </div>

    </div>
@stop