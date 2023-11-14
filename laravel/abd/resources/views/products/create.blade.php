<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> create</h1>
    <form action="{{route('product.store')}}" method="post">
    @csrf
    @method('post')

    <div>
            <label >name</label>
            <input type="text" name="name" placeholder="name"></input>
        </div>
        <div>
            <label >qauntity</label>
            <input type="text" name="qty" placeholder="Qty"></input>
        </div>
        <div>
            <label >price</label>
            <input type="text" name="price" placeholder="price"></input>
        </div>
        <div>
            <label >description</label>
            <input type="text" name="description" placeholder="decription"></input>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>
