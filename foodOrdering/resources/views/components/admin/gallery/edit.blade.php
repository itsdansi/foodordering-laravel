
@extends('components.admin.dashlayout')

@section('content')
<div class="az-content az-content-dashboard container-fluid">
    <div class="container-fluid">
        <div class="az-content-body">
            <form action="/admin/galleries/update/{{$gallery->id}}" class= "container-fluid" method="POST"  enctype = "multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="gallery_name">gallery Name</label>
                    <input type="text" name="gallery_name" value="{{$gallery->gallery_name}}" id="" class="form-control @error('gallery_name') is-invalid @enderror">
                    @error('gallery_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror<br>

                    gallery Description: <textarea name="gallery_desc" id="" cols="30" rows="10" class = "form-control">{{$gallery->gallery_desc}}</textarea> 
                    @error('gallery_desc')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                   

                    gallery Image: <input type="file" name="gallery_image" id=""  class = "form-control"  value="{{$gallery->gallery_name}}"> 
                    @error('gallery_image')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>
                    <input type="submit" value="Update gallery" class = "form-control">
                </div>
            </form>
        </div><!-- az-content-body -->
    </div><!-- container -->
</div><!-- az-content -->
@endsection