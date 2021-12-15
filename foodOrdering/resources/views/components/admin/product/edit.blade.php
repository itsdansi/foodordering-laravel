<form action="/admin/products/update/{{$product->id}}" class= "container" method="POST">
    @csrf
    <!-- @method('PUT') -->
    Product Name: <input type="text" name="product_name" id="" value="{{$product->product_name}}"> <br><br>
    Product Description: <textarea name="product_desc" id="" cols="30" rows="10">{{$product->product_desc}}</textarea> <br><br>
    Product Price: <input type="text" name="price" id=""value="{{$product->price}}"> <br><br>
    Category: <select name="category_id" id="">
        <option value="">Select Category</option>
        @foreach($category as $category)
            <option value="{{$category->id}}" @if($category->id == $product-> category_id) selected @endif>{{$category->category_name}}</option>
        @endforeach 
    </select> <br><br>
    <!-- Product Image: <input type="file" name="product_image" id=""> <br><br> -->
    <input type="submit" value="Create Product">
</form>