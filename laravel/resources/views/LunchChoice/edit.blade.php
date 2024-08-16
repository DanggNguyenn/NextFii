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
        <form action="/update-lunch-choice" method="post">
            <!-- Hidden field to identify which choice to update -->
            <input type="hidden" name="choiceId" value="123"> <!-- Thay đổi giá trị này theo ID thực tế -->

            <div class="form-group">
                <label for="choiceDate">Date</label>
                <input type="date" class="form-control" id="choiceDate" name="choiceDate" value="2024-08-16" required> <!-- Thay đổi giá trị value theo ngày thực tế -->
            </div>
            <div class="form-group">
                <label for="choiceTime">Time</label>
                <input type="time" class="form-control" id="choiceTime" name="choiceTime" value="12:00" required> <!-- Thay đổi giá trị value theo giờ thực tế -->
            </div>
            <div class="form-group">
                <label for="restaurant">Restaurant</label>
                <select class="form-control" id="restaurant" name="restaurant" required>
                    <option value="">Select a restaurant</option>
                    <option value="restaurant1" selected>Restaurant 1</option>
                    <option value="restaurant2">Restaurant 2</option>
                    <option value="restaurant3">Restaurant 3</option>
                </select> <!-- Thay đổi giá trị selected theo nhà hàng thực tế -->
            </div>
            <div class="form-group">
                <label for="menuItems">Menu Items</label>
                <textarea class="form-control" id="menuItems" name="menuItems" rows="4" placeholder="List of menu items" required>Chicken Sandwich, Salad</textarea> <!-- Thay đổi giá trị nội dung theo menu thực tế -->
            </div>
            <button type="submit" class="btn btn-primary">Update Choice</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
