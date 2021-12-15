@extends('components.admin.dashlayout')

@section('content')
<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <form action="/admin/products/store" class= "container" method="POST">
                @csrf
                Product Name: <input type="text" name="product_name" id="" class="form-control"> <br><br>
                Product Description: <textarea name="product_desc" id="" cols="30" rows="10" class = "form-control"></textarea> <br><br>
                Product Price: <input type="text" name="price" id="" class = "form-control"> <br><br>
                Category: <select name="category_id" id="" class = "form-control">
                    <option value="">Select Category</option>
                    @foreach($category as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach 
                </select> <br><br>
                <!-- Product Image: <input type="file" name="product_image" id=""> <br><br> -->
                <input type="submit" value="Create Product" class = "form-control">
            </form>
        </div><!-- az-content-body -->
    </div><!-- container -->
</div><!-- az-content -->
@endsection