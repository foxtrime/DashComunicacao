@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Face Jorge</h1>
@stop

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">Cadastrar Categoria</div>
        <div class="panel-body">
            <form method="POST" action="{{ url("facejorge/$facejorge->id") }}">
            {!! method_field('PUT') !!}
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="total_seguidores">Total de seguidores</label>
                    <input type="text" class="form-control" name="total_seguidores" id="total_seguidores" style="width: 40%;" value="{{$facejorge->total_seguidores}}" required>
                </div>

                <div class="form-group">
                    <label for="envolvimento">Envolvimento</label>
                    <input type="text" class="form-control" name="envolvimento" id="envolvimento" style="width: 40%;" value="{{$facejorge->envolvimento}}" required>
                </div>

                <div class="form-group">
                    <label for="total_curtidas">Total de curtidas</label>
                    <input type="text" class="form-control" name="total_curtidas" id="total_curtidas" style="width: 40%;" value="{{$facejorge->total_curtidas}}" required>
                </div>

                <div class="form-group">
                    <label for="crescimento">Crescimento</label>
                    <input type="text" class="form-control" name="crescimento" id="crescimento" style="width: 40%;" value="{{$facejorge->crescimento}}" required>
                </div>

                <div class="form-group">
                    <label for="total_publicacoes">Total de publicações</label>
                    <input type="text" class="form-control" name="total_publicacoes" id="total_publicacoes" style="width: 40%;" value="{{$facejorge->total_publicacoes}}" required>
                </div>

                <div class="form-group">
                    <label for="reacoes">Reações</label>
                    <input type="text" class="form-control" name="reacoes" id="reacoes" style="width: 40%;" value="{{$facejorge->reacoes}}" required>
                </div>

                <div class="form-group">
                    <label for="comentarios">Comentarios</label>
                    <input type="text" class="form-control" name="comentarios" id="comentarios" style="width: 40%;" value="{{$facejorge->comentarios}}"  required>
                </div>

                <div class="form-group">
                    <label for="compartilhamentos">Compartilhamentos</label>
                    <input type="text" class="form-control" name="compartilhamentos" id="compartilhamentos" style="width: 40%;" value="{{$facejorge->compartilhamentos}}" required>
                </div>

                <div class="form-group">
                    <label for="mes">Mes</label>
                    <select name="mes" id="mes " class="form-control form-control error" style="width: 40%;" disabled required>  	  
                        <option value="{{$facejorge->mes}}">{{$facejorge->mes}}</option>
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