<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới nha hang</title>
</head>
<body>
    <h1>Thêm Mới nha hang</h1>
    <form action="/restaurant" method="post">
        @csrf
        <label for="name">name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="address">address:</label>
        <input type="text" id="price" name="address" required><br><br>

        <label for="phone">phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <button type="submit">Create</button>
        
    </form>
</body>
</html>