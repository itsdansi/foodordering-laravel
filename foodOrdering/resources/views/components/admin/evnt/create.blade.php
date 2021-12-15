<form action="/admin/events/store" class= "container" method="POST">
    @csrf
    <!-- @method('PUT') -->
    Event Name: <input type="text" name="event_name" id="" > <br><br>
    Event Description: <textarea name="event_desc" id="" cols="30" rows="10"></textarea> <br><br>
    Event Location: <input type="text" name="event_location" id="" > <br><br>
    Event Date: <input type="date" name="event_date" id="" > <br><br>
    Event Time: <input type="time" name="event_time" id="" > <br><br>
    <!-- Event Image: <input type="text" name="event_image" id="" "> <br><br> -->

    <input type="submit" value="Add event">
</form>