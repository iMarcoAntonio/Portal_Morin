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
		        <h1 class="page-header">Buscar Medicamento</h1>
		    </div>
		</div>
		<div class="row">
		    <table data-toggle="table" id="table-pagination" data-url="data4.json" data-pagination="true" data-search="true" data-show-toggle="true" data-show-columns="true" data-show-refresh="true">
			    <thead>
			        <tr>
			            <!--th data-field="descripcion" data-align="right" data-sortable="true">Descripción</th-->
			            <th data-field="id" data-align="left" data-sortable="true">Id</th>
			            <th data-field="name" data-align="center" data-sortable="true">Nombre</th>
			            <th data-field="price1" data-align="center" data-sortable="true">Proveedor 1</th>
			            <th data-field="price2" data-align="center" data-sortable="true">Proveedor 2</th>
			            <th data-field="price3" data-align="center" data-sortable="true">Proveedor 3</th>
			            <th data-field="price4" data-align="center" data-sortable="true">Proveedor 4</th>
			            <th data-field="price5" data-align="center" data-sortable="true">Proveedor 5</th>
			      	</tr>
			    </thead>
			</table>
		</div>
	</div>
@stop