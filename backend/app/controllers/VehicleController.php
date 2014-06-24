<?php

class VehicleController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //$vehicles = Vehicle::all()->toJson();
        //return $vehicles;
        $vehicle = DB::table('vehicles')->where('users_id', '=', Auth::user()->id)->get();
        return View::make('vehicles.vehiclelist')->with('vehicle', $vehicle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
        $vehicle = Input::all();
        $vehicle['users_id'] = Auth::user()->id;
        $vehicle['status'] = true;
        try {
            $vehicle2 = Vehicle::find($vehicle['id']);
            $vehicle2->plate = $vehicle['plate'];
            $vehicle2->color = $vehicle['color'];
            $vehicle2->brand = $vehicle['brand'];
            $vehicle2->model = $vehicle['model'];
            $vehicle2->capacity = $vehicle['capacity'];
            $vehicle2->type = $vehicle['type'];
            $vehicle2->save();
            return Redirect::intended('/vehiclelist');
        } catch (Exception $e) {
            Vehicle::create($vehicle);
            return Redirect::intended('/vehiclelist');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $vehicle = Vehicle::find($id);
        return $vehicle;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $vehicle = Vehicle::find($id);
        return View::make('vehicles.edit')->with('vehicle', $vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $vehicle = Input::all();
        $vehicle['status'] = true;
        Vehicle::update($vehicle);
        return Redirect::intended('/vehiclelist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy() {
        $datos = Input::all();
        $vehicle = Vehicle::find($datos['id']);
        $vehicle->delete();
        return Redirect::intended('/vehiclelist');
    }

}
