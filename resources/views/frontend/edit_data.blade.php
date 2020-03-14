<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Add Product</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="offset-md-3 col-md-6">
          <form action="{{url('edit_db',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Edit Name</label>
              <input type="text" class="form-control" name="name" placeholder="previously : {{$data->name}}">
            </div>
            <div class="form-group">
              <label>Edit Price</label>
              <input type="number" class="form-control" name="price" placeholder="previously : {{$data->price}}">
            </div>
            <div class="form-group form-check">
              <input type="file" name="photo">
              <label class="form-check-label" for="exampleCheck1">Edit photo</label>
            </div>
            <button type="submit" class="btn btn-primary">Edit Product</button>
          </form>
        </div>

      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>