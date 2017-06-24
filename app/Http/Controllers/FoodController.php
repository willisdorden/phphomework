<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Food;
use App\Meal;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Meal $meal)
    {

        return view('foods', compact('meal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Meal $meal)
    {
        $validator = Validator::make($request->all(), [
            'food_name' => 'required|max:255',

        ]);

        if ($validator->fails()) {
            return redirect("/{$meal->id}/foods")
                ->withInput()
                ->withErrors($validator);
        }
        $food = new Food();
        $food->meal_id = $meal->id;
        $food->food_name = $request->food_name;
        $food->protein =$request->protein;
        $food->Carbohydrates =$request->Carbohydrates;
        $food->fat=$request->fat;
        $food->save();

        return redirect("/{$meal->id}/foods");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {

        return view('meal', compact('meal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
