<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới món ăn</title>
</head>
<body>
    <h1>Thêm Mới món ăn</h1>
    <form action="/meal" method="post">
        @csrf
    
        <label for="restaurant_id">restaurant_id:</label>
        <input type="number" id="restaurant_id" name="restaurant_id" required><br><br>

        <label for="name">name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="price">price:</label>
        <input type="text" id="price" name="price" required><br><br>

        <label for="description">description:</label>
        <input type="text" id="description" name="description" required><br><br>

        <button type="submit">Create</button>
        
    </form>
</body>
</html>
