@extends('components.admin.dashlayout')

@section('content')
<div class="az-content az-content-dashboard">
    <div class="container-fluid">
        <div class="az-content-body">
            <form action="/admin/categories/store" class= "container-fluid" method="POST">
                @csrf
                <div class = "form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" name="category_name" value="{{ old('category_name') }}" id="" class="form-control @error('category_name') is-invalid @enderror">
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror<br>

                    <label for = "category_desc">Category Description</label>
                    <textarea name="category_desc" id="" cols="30" rows="10" class = "form-control">{{old('category_desc')}}</textarea>
                    @error('category_desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror <br>
                    <!-- category Image: <input type="file" name="category_image" id=""> <br><br> -->
                    <input type="submit" value="Add category" class = "form-control" >
                </div>
            </form>
        </div><!-- az-content-body -->
    </div><!-- container -->
</div><!-- az-content -->
@endsection