@extends('components.admin.dashlayout')

@section('content')
<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <form action="/admin/categories/store" class= "container" method="POST">
                @csrf
                Category Name: <input type="text" name="category_name" id="" class="form-control"> <br><br>
                Category Description: <textarea name="category_desc" id="" cols="30" rows="10" class = "form-control"></textarea> <br><br>
                <!-- category Image: <input type="file" name="category_image" id=""> <br><br> -->
                <input type="submit" value="Create category" class = "form-control">
            </form>
        </div><!-- az-content-body -->
    </div><!-- container -->
</div><!-- az-content -->
@endsection