@extends('store.editorial.template')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h2 class="titulo-librit">Editorial</h2>
	</div>
<div class="tabla-cart">
@if(count($res))
<div class="table-responsive">
	<table class="table table-stripped table-hover table-border">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Autor</th>
			<th>Precio</th>
			<th>Eliminar</th>
		</tr>
	</thead>
		<tbody>
		@foreach($res as $item)
		<tr>
		<td>{{$item->titulo}}</td>
		<td>{{$item->autor}}</td>
		<td>${{number_format($item->precio,2)}}</td>
		<td>
			<a href="{{route('edit-delete',$item->id)}}" class="btn btn-danger">
				<i class="fa fa-remove"></i>
			</a>
		</td>
		</tr>
		@endforeach
			
		</tbody>
	</table><hr>
</div>
@else
<h3><span class=" main-title">No hay productos agregados</span></h3>
@endif
</div>
<br>
<div class="btn-group btn-group-justified " role="group" ariable="Justified button group">
<a href="{{route('agregar-libro')}}" class="btn btn-primary rad"><i class="fa fa-chevron-circle-left fa-2x"> Agregar Libro</i></a>
</div>





</div>
@stop