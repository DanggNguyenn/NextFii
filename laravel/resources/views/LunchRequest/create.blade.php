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
        <h2>Lunch Request Form</h2>
        <form action="/lunchrequest" method="post">
            @csrf
            <div class="form-group">
                <label for="requestDate">Date</label>
                <input type="date" class="form-control" id="requestDate" name="request_date" required>
            </div>
            <div class="form-group">
                <label for="requestTime">Time</label>
                <input type="time" class="form-control" id="requestTime" name="request_time" required>
            </div>
            <div class="form-group">
                <label for="restaurant">Restaurant</label>
                <select class="form-control" id="restaurant" name="restaurant_id" required>
                    <option value="">Select a restaurant</option>
                    @foreach ($restaurant as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
                    
                    
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit Request</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
