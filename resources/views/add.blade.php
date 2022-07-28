<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Add what am I doing?</title>
    </head>
    <body>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-12">
                    <h1>Add new product</h1>
                        
                    <form action="{{url('save')}}" method="POST">
                        @csrf
                        <div class="md-3">
                            <label for="id" class="form-label">ID: </label>
                            <input type="text" class="form-control" name="id" placeholder="Enter Product ID here">
                        </div>
                        <div class="md-3">
                            <label for="name" class="form-label">Name: </label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Product Name here">
                        </div>
                        <div class="md-3">
                            <label for="price" class="form-label">Price: </label>
                            <input type="number" class="form-control" name="price" placeholder="Enter Product Price here">
                        </div>
                        <div class="md-3">
                            <label for="detail" class="form-label">Details: </label>
                            <textarea name="detail" id="detail" class="form-control" placeholder="Enter Product Details here"></textarea>
                        </div>
                        <div class="md-3">
                            <label for="image1" class="form-label">Image 1: </label>
                            <input type="file" class="form-control" name="image1">
                        </div>
                        <div class="md-3">
                            <label for="image2" class="form-label">Image 2: </label>
                            <input type="file" class="form-control" name="image2">
                        </div>
                        <div class="md-3">
                            <label for="image3" class="form-label">Image 3: </label>
                            <input type="file" class="form-control" name="image3">
                        </div>
                        <div class="md-3">
                            <label for="producer" class="form-label">Producer: </label>
                            <input type="text" class="form-control" name="producer">
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="{{url('index')}}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>