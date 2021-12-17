@extends('components.admin.dashlayout')

@section('content')
<div class = "container">
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
          <div class="az-content-breadcrumb">
            <span>Admin</span>
            <span>Data</span>
            <span>Gallery</span>
          </div>

          <hr class="mg-y-30">

          <div class="az-content-label mg-b-5">Gallery list</div>
          <a href="/admin/galleries/create"> <button class="btn btn-outline-secondary float-right mg-b-40"  type="button" >Create new gallery</button></a>


          <div class="table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($galleries as $gallery)
                <tr>
                  <th scope="row">1</th>
                  <td>{{$gallery->gallery_name}}</td>
                  <td>{{$gallery->gallery_desc}}</td>
                  <td>{{$gallery->gallery_image}}</td>
                  <td><a href="/admin/galleries/edit/{{ $gallery->id }}"><i class="fas fa-edit" style="color:Green"  ></i></a> &nbsp &nbsp &nbsp <a href="/admin/galleries/destroy/{{ $gallery->id }}"><i class="fas fa-trash-alt" style="color:Red"></i></a> </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="ht-40"></div>

          <div class="az-footer mg-t-auto">
            <div class="container">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © cryptictechnologies.com 2020</span>
            </div><!-- container -->
          </div><!-- az-footer -->
        </div><!-- az-content-body -->
</div>
@endsection