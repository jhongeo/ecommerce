@extends('layouts.app')


@section('content')
	<div class="big-padding text-center blue-gray white-text">
		<h1>Productos</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Título</td>
					<td>Descripción</td>
					<td>Precio</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->title }}</td>
						<td>{{ $product->description }}</td>
						<td>{{ $product->pricing }}</td>
						<td> Acciones </td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection