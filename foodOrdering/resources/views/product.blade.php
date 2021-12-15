@extends('layout')

@section('content')
  @foreach($products as $product)
  <div class ="container">
  <div class = "rows" style="margin-top: 20px;">
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="{{ asset('storage/'.$product->image) }}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{ $product->product_name }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                    </div>
                    <small class="text-muted">{{ $product->price }}</small>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

  @endforeach
@endsection