<form action="/admin/categories/update/{{$category->id}}" class= "container" method="POST">
    @csrf
    <!-- @method('PUT') -->
    Category Name: <input type="text" name="category_name" id="" value="{{$category->category_name}}"> <br><br>
    Category Description: <textarea name="category_desc" id="" cols="30" rows="10">{{$category->category_desc}}</textarea> <br><br>
    </select> <br><br>
    <!-- category Image: <input type="file" name="category image" id=""> <br><br> -->
    <input type="submit" value="Create category">
</form>