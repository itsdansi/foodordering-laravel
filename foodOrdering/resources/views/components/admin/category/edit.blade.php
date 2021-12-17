

@extends('components.admin.dashlayout')

@section('content')
<div class="az-content az-content-dashboard container-fluid">
    <div class="container-fluid">
        <div class="az-content-body">
            <form action="/admin/categories/update/{{$category->id}}" class= "container-fluid" method="POST"  enctype = "multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" name="category_name" id="" value="{{$category->category_name}}" id="" class="form-control @error('category_name') is-invalid @enderror">
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror<br>

                    Category Description: <textarea name="category_desc" id="" cols="30" rows="10" class = "form-control">{{$category->category_desc}}</textarea> 
                    @error('category_desc')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    <input type="submit" value="Update category" class = "form-control">
                </div>
            </form>
        </div><!-- az-content-body -->
    </div><!-- container -->
</div><!-- az-content -->
@endsection