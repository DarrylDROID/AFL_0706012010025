<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_brands = "active";
   
        $brands = Brand::all();
     
        return view('brand',
            compact('active_brands',  'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBrand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Brand::create([
            'brand_code' => $request->brand_code,
            'brand_name' => $request->brand_name,
            'founder' => $request->founder,
            'date_found' => $request->date_found,
            'headquarters' => $request->headquarters,
            'image' => $request->file('image')->store('brand_image')
        ]);
        return redirect(route('brand.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brands = Brand::where('brand_code', $id)
        ->first();
        return view('showbrand', compact('brands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::findOrFail($id);
        return view('editBrand', compact('brands'));
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
        $brands = Brand::findOrFail($id);
        $img = $request->file('image');
        if($img){
            Storage::delete($request->oldImage);
            $brands->update([
                'brand_code' => $request->brand_code,
                'brand_name' => $request->brand_name,
                'founder' => $request->founder,
                'date_found' => $request->date_found,
                'headquarters' => $request->headquarters,
                'image' => $img->store('brand_image')
            ]);
        } else {
            $brands->update([
                'brand_code' => $request->brand_code,
                'brand_name' => $request->brand_name,
                'founder' => $request->founder,
                'date_found' => $request->date_found,
                'headquarters' => $request->headquarters
            ]);
        }
 
        return redirect(route('brand.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::findOrFail($id);
        Storage::delete($brands->image);
        $brands->delete();
        return redirect(route('brand.index'));
    }
}
