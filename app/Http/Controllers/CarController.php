<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_cars = "active";

        $cars = Car::all();
        $brands = Brand::all();

        return view('mycar', 
            compact('active_cars', 'cars', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('createCar', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $code = Str::upper(Str::substr($request->car, 0, 3));

        Car::create([
            'code' => $code,
            'car' => $request->car,
            'type' => $request->type,
            'merk' => $request->merk,
            'engine' => $request->engine,
            'price' => $request->price,
            'image' => $request->file('image')->store('car_image')
        ]);
        return redirect(route('car.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = Car::where('code', $id)
        ->first();
        return view('showcar', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Car::findOrFail($id);
        $brands = Brand::all();
        return view('editCar', compact('cars', 'brands'));
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
        $code = Str::upper(Str::substr($request->car, 0, 3));
        $cars = Car::findOrFail($id);
        $img = $request->file('image');
        if($img){
            Storage::delete($request->oldImage);
            $cars->update([
                'code' => $code,
                'car' => $request->car,
                'type' => $request->type,
                'merk' => $request->merk,
                'engine' => $request->engine,
                'price' => $request->price,
                'image' => $img->store('car_image')
            ]);
        } else {
            $cars->update([
                'code' => $code,
                'car' => $request->car,
                'type' => $request->type,
                'merk' => $request->merk,
                'engine' => $request->engine,
                'price' => $request->price
            ]);
        }

        return redirect(route('car.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Car::findOrFail($id);
        Storage::delete($cars->image);
        $cars->delete();
        return redirect(route('car.index'));
    }
}
