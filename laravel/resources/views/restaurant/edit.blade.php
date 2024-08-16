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
    <h1>Sửa quán ăn</h1>
    <form action="/restaurant/{{$Restaurant->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên quán ăn</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên quán ăn" value="{{$Restaurant->name}} ">
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ" value="{{$Restaurant->address}}" >
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" value="{{$Restaurant->phone}}" >
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
        <a href="{{ route('restaurant.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>