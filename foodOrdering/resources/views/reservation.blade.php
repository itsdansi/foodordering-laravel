@extends('layout')

@section('content')


<div class = "container form-control mt-100" >
 <form class="row g-3">
  <div class="col-md-12">
    <label for="inputState" class="form-label">Venue</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label" type="date">Date</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label" type="time">Time</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-12 ">
    <label for="inputState" class="form-label">Estimated people</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
 
  <div class="col-12 ">
    <button type="submit" class="btn btn-primary">BOOK NOW</button>
  </div>
 </form>
</div>

@endsection
