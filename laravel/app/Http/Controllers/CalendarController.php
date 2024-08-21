<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Meal;
use Illuminate\Http\Request;
use App\Models\Event; // Giả sử bạn có một model Event
use App\Models\LunchChoice;
use App\Models\LunchRequest;
use App\Models\Order;
use App\Models\Restaurant;

class CalendarController extends Controller
{
    public function getEvents()
    {
        $lunch_requests = LunchRequest::all();

        // Cấu hình sự kiện cho FullCalendar
        $events = [];
        foreach ($lunch_requests as $request) {
            $events[] = [
                'title' => $request->restaurant->name, // Hiển thị tên quán ăn
                'start' => $request->request_date,
                'id' => $request->id,
                'meal_name' => $request->restaurant->name, // Đảm bảo tên quán ăn có trong dữ liệu sự kiện
            ];
        }

        return response()->json($events);

    }
public function getLunchRequests(Request $request)
{
    $lunchRequestId = $request->input('id'); // Lấy id của lunch_request từ request

    // Tìm yêu cầu ăn uống theo ID
    $lunch_request = LunchRequest::where('id', $lunchRequestId)
        ->first();

    if (!$lunch_request) {
        return response()->json([
            'message' => 'Lunch request not found'
        ], 404);
    }

    // Tìm eatery liên quan đến yêu cầu ăn uống
    $restaurant = Restaurant::where('id', $lunch_request->restaurant_id)
        ->select('id', 'name', 'address')
        ->first();

    // Tìm danh sách foods liên quan đến eatery
    $meals = Meal::where('restaurant_id', $restaurant->id)
        ->select('id', 'name', 'price')
        ->get();

    // Tìm danh sách orders liên quan đến yêu cầu ăn uống và người dùng hiện tại
    $orders = LunchChoice::where('lunch_request_id', $lunchRequestId)
        ->where('user_id', auth()->user()->id)
        ->join('meals', 'lunch_choices.meal_id', '=', 'meals.id')
        ->select('lunch_choices.id', 'meals.name', 'lunch_choices.quantity')
        ->get();

    return response()->json([
        'lunch_request' => $lunch_request,
        'eateries' => $restaurant,
        'foods' => $meals,
        'orders' => $orders
    ]);
}




public function saveLunchOrder(Request $request)
{
    // Debug: Xem dữ liệu nhận được

    $order = new LunchChoice();
    $order->meal_id= $request->input('foodId');
    $order->quantity = $request->input('quantity');
    $order->user_id = auth()->user()->id;
    $order->lunch_request_id = $request->input('lunchRequestId');
    $order->save();

    return response()->json(['success' => true]);
}
public function getOrder($id)
{
    $order = LunchChoice::join('meals', 'lunch_choices.meal_id', '=', 'meals.id')
        ->where('lunch_choices.id', $id)
        ->select('lunch_choices.id', 'meals.name', 'lunch_choices.quantity', 'lunch_choice.lunch_request_id')
        ->first();
  
    if ($order) {
        return response()->json(['success' => true, 'order' => $order]);
    } else {
        return response()->json(['success' => false, 'message' => 'Order not found.'], 404);
    }
}

//
public function updateOrder(Request $request, $id)
{
    $order = LunchChoice::find($id);

    if (!$order) {
        return response()->json(['success' => false, 'message' => 'Order not found.']);
    }

    $order->quantity = $request->input('quantity');
    $order->lunch_request_id = $request->input('lunchRequestId');
    $order->save();

    return response()->json(['success' => true]);
}
public function deleteOrder($id)
{
    $order = LunchChoice::find($id);

    if ($order) {
        $order->delete();
        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false, 'message' => 'Order not found.'], 404);
    }
}

}


