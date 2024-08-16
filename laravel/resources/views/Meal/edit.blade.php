<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>Edit Meal</h2>
    <form action= "/meal/{{$Meal->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="Retaurants">Retaurants</label>
        <input type="text" class="form-control" id="Retaurants" name="restaurant_id" placeholder="Enter Retaurants" value='{{$Meal->restaurant_id}}'>
      </div>
      <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Name" value='{{$Meal->name}}'>
      </div>
      <div class="form-group">
        <label for="email">Price</label>
        <input type="text" class="form-control" id="Price" name="price" placeholder="Enter Price" value='{{$Meal->price}}'>
      </div>
      <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" value='{{$Meal->description}}'>
      </div>
      
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
