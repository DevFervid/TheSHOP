@extends('layouts.main')

@section('content')
		<div class="row">
		   	<div class="col-md-12">
		   		<h1 class="display-4">Categories</h1>
		   		<hr>
		   	</div>
	   </div>
	   @foreach($categories as $category)
	   		<ul>
	   			<li>{{$category->name}}</li>
	   		</ul>
	   @endforeach
@endsection