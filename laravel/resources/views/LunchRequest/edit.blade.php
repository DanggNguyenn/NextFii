<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lunch Request</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Lunch Request</h2>
        <form action="/lunchrequest/{{$LunchRequest->id}}" method="POST">
            @csrf
        @method('PUT')
            <!-- Hidden field to identify which request to update -->
            <input type="hidden" name="requestId" value="123"> <!-- Thay đổi giá trị này theo ID thực tế -->

            <div class="form-group">
                <label for="requestDate">Date</label>
                <input type="date" class="form-control" id="requestDate" name="request_date" value="{{$LunchRequest->request_date}}"  required> <!-- Thay đổi giá trị value theo ngày thực tế -->
            </div>
            <div class="form-group">
                <label for="requestTime">Time</label>
                <input type="time" class="form-control" id="requestTime" name="request_time" value="{{$LunchRequest->request_time}}"  required> <!-- Thay đổi giá trị value theo giờ thực tế -->
            </div>
            <div class="form-group">
                <label for="restaurant">Restaurant</label>
                <select class="form-control" id="restaurant" name="restaurant_id" required>
                    <option value="{{$LunchRequest->restaurant_id}} ">Select a restaurant</option>
                    @foreach ($restaurant as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
                </select> <!-- Thay đổi giá trị selected theo nhà hàng thực tế -->
            </div>
           
            <button type="submit" class="btn btn-primary">Update Request</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstra
