@extends('components.admin.dashlayout')

@section('content')
<div class = "container">
<div class="az-content-body pd-lg-l-40 d-flex flex-column">
<div class="az-content-breadcrumb">
            <span>Admin</span>
            <span>Data</span>
            <span>Product</span>
          </div>

          <hr class="mg-y-30">

          <div class="az-content-label mg-b-5">Product list</div>
          <a href="/admin/products/create"> <button class="btn btn-outline-secondary float-right mg-b-40"  type="button" >Create new category</button></a>


          <div class="table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($products as $product)
                <tr>
                  <th scope="row">1</th>
                  <td>{{$product->product_name}}</td>
                  <td>{{$product->product_desc}}</td>
                  <td>{{$product->category_id}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->product_image}}</td>
                  <td><a href="/admin/products/edit/{{ $product->id }}"><i class="fas fa-edit" style="color:Green"  ></i></a> &nbsp &nbsp &nbsp <a href="/admin/products/destroy/{{ $product->id }}"><i class="fas fa-trash-alt" style="color:Red"></i></a> </td>
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