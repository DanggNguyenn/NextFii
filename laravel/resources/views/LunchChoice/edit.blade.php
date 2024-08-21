<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lunch Choice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Lunch Choice</h2>
        <form action="/lunchchoice/{{$LunchChoice->id}}" method="POST">
            @csrf
        @method('PUT')
            <!-- Hidden field to identify which request to update -->
            <input type="hidden" name="requestId" value="123"> <!-- Thay đổi giá trị này theo ID thực tế -->

            <div class="form-group">
                <label for="user_id">Id User</label>
                <input type="number" class="form-control" id="requestuser_id" name="user_id" value="{{$LunchChoice->user_id}}"  required>
            </div>
            <div class="form-group">
                <label for="meal_id">Id Meal</label>
                <input type="number" class="form-control" id="requestmeal_id" name="meal_id" value="{{$LunchChoice->meal_id}}"  required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{$LunchChoice->quantity}}"  required>
            </div>
            
           
            <button type="submit" class="btn btn-primary">Update Request</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstra
