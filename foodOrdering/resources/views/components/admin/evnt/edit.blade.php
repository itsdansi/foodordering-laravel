

@extends('components.admin.dashlayout')

@section('content')
<div class="az-content az-content-dashboard container-fluid">
    <div class="container-fluid">
        <div class="az-content-body">
            <form action="/admin/events/update/{{$event->id}}" class= "container-fluid" method="POST"  enctype = "multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="event_name">Event Name</label>
                    <input type="text" name="event_name" value="{{$event->event_name}}" id="" class="form-control @error('event_name') is-invalid @enderror">
                    @error('event_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror<br>

                    Event Description: <textarea name="event_desc" id="" cols="30" rows="10" class = "form-control">{{$event->event_desc}}</textarea> 
                    @error('event_desc')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    Event Location: <input type="text" name="event_location" id="" class = "form-control"  value="{{$event->event_location}}"> 
                    @error('location')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    Event Date: <input type="date" name="event_date" id="" class = "form-control"  value="{{$event->event_date}}"> 
                    @error('date')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    Event Time: <input type="time" name="event_time" id="" class = "form-control"  value="{{$event->event_time}}"> 
                    @error('location')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    <!-- Event Image: <input type="file" name="event_image" id=""  class = "form-control"  value="{{$event->event_image }}"> 
                    @error('event_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br> -->
                    <input type="submit" value="Update Event" class = "form-control">
                </div>
            </form>
        </div><!-- az-content-body -->
    </div><!-- container -->
</div><!-- az-content -->
@endsection