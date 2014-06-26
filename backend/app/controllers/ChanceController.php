<?php

class ChanceController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
    /*
        $vehicle =  DB::table('vehicles')->where('users_id', '=', Auth::user()->id)->get();
        return View::make('vehicles.vehiclelist')->with('vehicle', $vehicle);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $vehicles = DB::table('vehicles')->where('users_id', '=', Auth::user()->id)->get();
        return View::make('chances.create')->with('vehicles', $vehicles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
      /*
        $vehicle = Input::all();
        $vehicle['users_id'] = Auth::user()->id;
        $vehicle['status'] = true;
        Vehicle::create($vehicle);
        
        return Redirect::intended('/vehiclelist');
        */
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
