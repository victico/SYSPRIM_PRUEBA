<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Brand, Car};
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        $cars   = Car::all();
        return view('cars.cars',['brands' => $brands, 'cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $v = $request->validate([
            'placa' => 'required|unique:cars',
            'año' => 'required|max:2022',
            'fecha' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required'
        ],
        [
            'placa.unique' => 'Número de placa ya regsitrado',
            'año.max' => 'El año debe ser menor o igual al año en curso',

        ]);


        $car = new Car();
        $car->placa    = $request->input('placa');
        $car->year     = $request->input('año');
        $car->checkin  = $request->input('fecha');
        $car->color    = $request->input('color');
        $car->brand_id = $request->input('marca');
        $car->model_id = $request->input('modelo'); 

        $car->save();

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        return $car;
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
        $car = Car::find($id);
 
        $v = $request->validate([
            'placa' => 'required',
            'año' => 'required|max:2022',
            'fecha' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required'
        ],
        [
            'año.max' => 'El año debe ser menor o igual al año en curso',

        ]);

        $car->placa    = $request->input('placa');
        $car->year     = $request->input('año');
        $car->checkin  = $request->input('fecha');
        $car->color    = $request->input('color');
        $car->brand_id = $request->input('marca');
        $car->model_id = $request->input('modelo'); 
         
        $car->save();

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Car::where('id', $id)->delete();
        return redirect('/cars');
    }
}
