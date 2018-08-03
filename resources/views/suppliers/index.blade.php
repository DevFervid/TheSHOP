@extends('layouts.main')

@section('content')
		<div class="row">
		   	<div class="col-md-12">
		   		<h1 class="display-4">Suppliers</h1>
		   		<hr>
		   	</div>
	   </div>
	   @foreach($suppliers as $supplier)
	   		<ul>
	   			<li>{{$supplier->name}}</li>
	   		</ul>
	   @endforeach
@endsection