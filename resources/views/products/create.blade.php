@extends('layouts.main')

@section('content')
		<div class="card">
            <div class="card-header">
            	Create a new Product
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('products.store')}}" method="post" class="form" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="category"> Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                               @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                               @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="supplier">Supplier</label>
                            <select name="supplier_id" id="supplier_id" class="form-control">
                               @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                               @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                        </div>
                        <div class="form-group">
	                        <label for="price">Price <span class="text-danger">*</span></label>
	                        <div class="input-group">
	                            <span class="input-group-addon">KSH</span>
	                            <input type="text" name="price" id="price" placeholder="Price" class="form-control" value="{{ old('price') }}">
	                        </div>
                    	</div>
                        <div class="form-group">
                        	<label for="image">Product Image </label>
                        	<input type="file" name="image" id="image" class="form-control">
                    	</div>

                        <div class="form-group">
                            <button class="btn btn-success pull-right" type="submit">Create Product</button>
                        </div>
                        
                    </form>
                </div>
        </div>
@endsection