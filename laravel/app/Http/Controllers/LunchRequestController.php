<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\LunchRequest;

class LunchRequestController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LunchRequests = LunchRequest::paginate(20); ;
        // dd($eateries);
        return view('LunchRequest.index',[
            'LunchRequests' => $LunchRequests
        ]);
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurant = Restaurant::all();
        return view('LunchRequest.create', compact('restaurant') );   
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required',
            'request_date' => 'required',
            'request_time' => 'required',
        ]);

        $LunchRequest = LunchRequest::create([
   
            'restaurant_id' => $request->input('restaurant_id'),
            'request_date' => $request->input('request_date'),
            'request_time' => $request->input('request_time'),
        ]);

        $LunchRequest->save();
        return redirect('/lunchrequest')->with('success', 'LunchRequest has been added');
    }

    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::all();
        $LunchRequest = LunchRequest::find($id); 
        return view('lunchrequest.edit', compact('restaurant'))->with('LunchRequest',$LunchRequest);
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $LunchRequest = LunchRequest::where('id',$id)->update([
            'restaurant_id' => $request->input('restaurant_id'),
            'request_date' => $request->input('request_date'),
            'request_time' => $request->input('request_time'),

        ]);
        
        return redirect('/lunchrequest')->with('success', 'LunchRequest has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $LunchRequest = LunchRequest::find($id);
        $LunchRequest->delete();
        return redirect('/lunchrequest')->with('success', 'LunchRequest has been deleted');  
    }
}
