<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LunchChoice;

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
        return view('LunchChoice.create');   
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
            'id' => 'required',
            'admin_id' => 'required',
            'restaurant_id' => 'required',
        ]);

        $LunchChoice = LunchChoice::create([
            'id' => $request->input('id'),
            'admin_id' => $request->input('admin_id'),
            'restaurant_id' => $request->input('restaurant_id'),
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
        $LunchChoice = LunchChoice::find($id); 
        return view('lunchchoice.edit')->with('LunchChoice',$LunchChoice);
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
            'id' => $request->input('id'),
            'admin_id' => $request->input('admin_id'),
            'restaurant_id' => $request->input('restaurant_id'),
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
