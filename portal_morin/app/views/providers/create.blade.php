@extends('layouts/layout')

@section('consultas')
	<li>
	    <a href="../index"><i class="fa fa-table fa-fw"></i>Consultas</a>
	</li>
@stop

@section('providers')
	<li>
	    <a href="{{ route('provider.index') }}"><i class="fa fa-table fa-fw"></i>Proveedores</a>
	</li>
@stop

@section('updateDataBase')
	<li>
	    <a href="../upload"><i class="fa fa-table fa-fw"></i>Actualizar base de datos</a>
	</li>
@stop

@section('content')
	<div id="page-wrapper">
	    <div class="row">
	        <div class="col-lg-12">
	            <h1 class="page-header">Proveedores</h1>
	        </div>
	        <div class="col-lg-12">
	            <div class="provider-create">
					<div class="form-group">
						{{Form::open(['route' => 'provider.store'])}}
						<div>
							{{Form::label('username','Datos del proveedor')}}
							{{Form::text('providername', '', array('class' => 'form-control', 'placeholder' => 'Nombre del proveedor'))}}
						</div>
						<div>
							{{Form::submit('Guardar datos', array('class' => 'btn btn-primary btn-guardar'))}}
						</div>
						{{Form::close()}}
					</div>
				</div>
	        </div>
	    </div>
 	</div>
@stop