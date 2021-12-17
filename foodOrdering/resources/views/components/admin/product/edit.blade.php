

@extends('components.admin.dashlayout')

@section('content')
<div class="az-content az-content-dashboard container-fluid">
    <div class="container-fluid">
        <div class="az-content-body">
            <form action="/admin/products/update/{{$product->id}}" class= "container-fluid" method="POST"  enctype = "multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" value="{{$product->product_name}}"" id="" class="form-control @error('product_name') is-invalid @enderror">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror<br>

                    Product Description: <textarea name="product_desc" id="" cols="30" rows="10" class = "form-control">{{$product->product_desc}}</textarea> 
                    @error('product_desc')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    Product Price: <input type="text" name="price" id="" class = "form-control"  value="{{$product->price}}"> 
                    @error('price')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    Category: <select name="category_id" class = "form-control" id="">
                        <option value="">Select Category</option>
                        @foreach($category as $category)
                            <option value="{{$category->id}}" @if($category->id == $product-> category_id) selected @endif>{{$category->category_name}}</option>
                        @endforeach 
                    </select> <br><br>
                    @error('category_id')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    Product Image: <input type="file" name="product_image" id=""  class = "form-control"  value="{{ old('product_image') }}"> 
                    @error('product_image')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>
                    <input type="submit" value="Create Product" class = "form-control">
                </div>
            </form>
        </div><!-- az-content-body -->
    </div><!-- container -->
</div><!-- az-content -->
@endsection