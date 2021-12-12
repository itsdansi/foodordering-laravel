@extends('layout')


@section('content')
<div class="container mb-100">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7066.060740292896!2d84.42603192832047!3d27.68545620672222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994e54143d5dae9%3A0x1ee08358a9c106cc!2sCG%20Landmark%20MALL!5e0!3m2!1sen!2snp!4v1639296382152!5m2!1sen!2snp" 
  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div> 
<div class="container mt-100">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Contact Us</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="subject" class="form-control" id="subject" placeholder="Enter subject">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <button type="submit" class="form-control btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection