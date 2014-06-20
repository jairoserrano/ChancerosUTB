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
        $vehicle =  DB::table('vehicles')->where('users_id', '=', Auth::user()->id)->get();
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
        Vehicle::create($vehicle);
        
        return Redirect::intended('/profile');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //$vehicle = Vehicle::find($id)->toJson();
        //return $vehicle;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }
}
