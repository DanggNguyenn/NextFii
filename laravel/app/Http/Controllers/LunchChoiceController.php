<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LunchChoice;
use App\Models\Restaurant;

class LunchChoiceController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LunchChoices = LunchChoice::paginate(20); ;
        // dd($eateries);
        return view('LunchChoice.index',[
            'LunchChoices' => $LunchChoices
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
        return view('LunchChoice.create',compact('restaurant'));   
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
            
            
            'quantity'=> 'required',
            'user_id'=> 'required',
            'meal_id'=> 'required',
        ]);

        $LunchChoice = LunchChoice::create([
            
           
            'quantity'=> $request->input('quantity'),
            'user_id'=> $request->input('user_id'),
            'meal_id'=> $request->input('meal_id'),
        ]);

        $LunchChoice->save();
        return redirect('/lunchchoice')->with('success', 'LunchChoice has been added');
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
        $LunchChoice = LunchChoice::find($id); 
        return view('lunchchoice.edit', compact('restaurant'))->with('LunchChoice',$LunchChoice);
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
        $LunchChoice = LunchChoice::where('id',$id)->update([
            
            
            'quantity'=> $request->input('quantity'),
            'user_id'=> $request->input('user_id'),
            'meal_id'=> $request->input('meal_id'),
        ]);
        
        return redirect('/lunchchoice')->with('success', 'LunchChoice has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $LunchChoice = LunchChoice::find($id);
        $LunchChoice->delete();
        return redirect('/lunchchoice')->with('success', 'LunchChoice has been deleted');  
    }
}
