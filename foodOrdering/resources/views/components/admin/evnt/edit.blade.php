<form action="/admin/events/update/{{$event->id}}" class= "container" method="POST">
    @csrf
    <!-- @method('PUT') -->
    Event Name: <input type="text" name="event_name" id="" value="{{$event->event_name}}"> <br><br>
    Event Description: <textarea name="event_desc" id="" cols="30" rows="10">{{$event->event_desc}}</textarea> <br><br>
    Event Location: <input type="text" name="event_location" id=""value="{{$event->event_location}}"> <br><br>
    Event Date: <input type="date" name="event_date" id="" value="{{$event->event_date}}"> <br><br>
    Event Time: <input type="time" name="event_time" id="" value="{{$event->event_time}}"> <br><br>
    <!-- Event Image: <input type="text" name="event_image" id="" value="{{$event->event_image}}"> <br><br> -->

    <input type="submit" value="Update event">
</form>