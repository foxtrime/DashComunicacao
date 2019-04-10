@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Imprensa</h1>
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">Cadastrar Categoria</div>
        <div class="panel-body">
            <form method="POST" action="{{ url('/imprensa') }}">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="clipping">Clipping</label>
                    <input type="text" class="form-control" name="clipping" id="clipping" style="width: 40%;" required>
                </div>

                <div class="form-group">
                    <label for="noticias">Noticias</label>
                    <input type="text" class="form-control" name="noticias" id="noticias" style="width: 40%;" required>
                </div>

                <div class="form-group">
                    <label for="mes">Mes</label>
                    <select name="mes" id="mes " class="form-control form-control error" style="width: 40%;" required>  	  
                        <option value="">  </option>
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