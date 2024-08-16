<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;

class MealController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Meals = Meal::paginate(20); ;
        // dd($eateries);
        return view('Meal.index',[
            'Meals' => $Meals
        ]);
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Meal.create');   
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
            'name' => 'required',
            'price' => 'required',
            'description'=> 'required',
        ]);

        $Meal = Meal::create([
            'restaurant_id' => $request->input('restaurant_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        $Meal->save();
        return redirect('/meal')->with('success', 'Meal has been added');
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
        $Meal = Meal::find($id); 
        return view('meal.edit')->with('Meal',$Meal);
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
        $Meal = Meal::where('id',$id)->update([
            'restaurant_id' => $request->input('restaurant_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);
        
        return redirect('/meal')->with('success', 'Meal has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Meal = Meal::find($id);
        $Meal->delete();
        return redirect('/meal')->with('success', 'Meal has been deleted');  
    }
}