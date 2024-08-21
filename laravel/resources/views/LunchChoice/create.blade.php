<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Request Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Lunch Choice Form</h2>
        <form action="/lunchchoice" method="post">
            @csrf
            <div class="form-group">
                <label for="user_id">Id User</label>
                <input type="number" class="form-control" id="requestuser_id" name="user_id"  required>
            </div>
            <div class="form-group">
                <label for="meal_id">Id Meal</label>
                <input type="number" class="form-control" id="requestmeal_id" name="meal_id"   required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity"   required>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit Request</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
