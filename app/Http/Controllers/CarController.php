<?php

namespace App\Http\Controllers;

use App\brand;
use App\car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = car::orderby('id','asc')->paginate(15);

        return view('car.index',['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = brand::all();

        return view('car.create', ['brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'registration' => 'required',
            'year_of_manufacture' => 'required',
            'color' => 'required',
            'brand' => 'required'
        ]);

        $car = new car();
        $car->registration = $request->registration;
        $car->year_of_manufacture = $request->year_of_manufacture;
        $car->color = $request->color;

        $car->brand_id = brand::where('name', 'LIKE', '%'.$request->brand.'%')->first()->id;

        $car->save();

        return redirect('cars')->with('status','Car created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(car $car)
    {
        return view('car.show',['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(car $car)
    {
        $brands = brand::all();

        return view('car.edit', ['brands' => $brands, 'car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, car $car)
    {
        $this->validate($request, [
            'registration' => 'required',
            'year_of_manufacture' => 'required',
            'color' => 'required',
            'brand' => 'required'
        ]);

        $car                        = car::find($car->id);
        $car->registration          = $request->registration;
        $car->year_of_manufacture   = $request->year_of_manufacture;
        $car->color                 = $request->color;
        $car->brand_id              = brand::where('name', 'LIKE', '%'.$request->brand.'%')->first()->id;
        $car->save();

        return redirect('cars')->with('status','Car edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(car $car)
    {
        $car = car::find($car->id);
        $car->delete();

        return redirect('cars')->with('status','Car deleted successfully!');
    }
}
