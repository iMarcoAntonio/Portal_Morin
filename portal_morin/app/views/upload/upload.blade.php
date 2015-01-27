@extends('layouts/layout')

@section('consultas')
    <li>
        <a href="index"><i class="fa fa-table fa-fw"></i>Consultas</a>
    </li>
@stop

@section('providers')
    <li>
        <a href="{{ route('provider.index') }}"><i class="fa fa-table fa-fw"></i>Proveedores</a>
    </li>
@stop

@section('updateDataBase')
    <li>
        <a href="upload"><i class="fa fa-table fa-fw"></i>Actualizar base de datos</a>
    </li>
@stop

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Actualizar base de datos</h1>
                <div class="row">
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Actualizar información</h3>
                            </div>
                            <div class="panel-body">
                                {{Form::open(['url' => 'upload', 'files' => 'true'])}}
                                {{Form::file('file')}}
                                {{$errors->first('file')}}
                                {{Form::submit('Actualizar',array('class' => 'btn btn-primary btn-block actualizar'))}}
                                {{Form::close()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
