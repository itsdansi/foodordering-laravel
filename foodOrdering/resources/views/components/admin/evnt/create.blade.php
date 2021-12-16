@extends('components.admin.dashlayout')

@section('content')
<div class="az-content az-content-dashboard container-fluid">

    <div class="container-fluid">
        <div class="az-content-body">
            <form action="/admin/events/store" class= "container" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="event_name">Event Name</label>
                    <input type="text" name="event_name" value="{{ old('event_name') }}" id="" class="form-control @error('event_name') is-invalid @enderror">
                    @error('event_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror<br>

                    Event Description: <textarea name="event_desc" id="" cols="30" rows="10" class = "form-control" >{{ old('event_desc') }}</textarea> 
                    @error('event_desc')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    Event Location: <input type="text" name="event_location" value="{{ old('event_location') }}" class = "form-control" id="" > <br>
                    @error('event_location')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    Event Date: <input type="date" name="event_date" value="{{ old('event_date') }}" class = "form-control" id="" > <br>
                    @error('event_date')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>

                    Event Time: <input type="time" name="event_time" value="{{ old('event_time') }}" class = "form-control" id="" > <br> <br>
                    @error('event_time')
                        <!-- style = "border-color:red" -->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    
                    @enderror <br>
                 
                    Event Image: <input type="file" name="event_image" value="{{ old('event_image') }}" class = "form-control" id="" > <br>

                    <input type="submit" value="Add event" class = "form-control" >
             
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
