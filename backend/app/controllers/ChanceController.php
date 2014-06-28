<?php

class ChanceController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //$chances = Chance::all();
        $chances = DB::table('chances')->where('date', '>=', new DateTime('today'))->get();
        return View::make('chances.chanceslist')->with('chances', $chances);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $vehicles = DB::table('vehicles')->where('users_id', '=', Auth::user()->id)->get();
        if ($vehicles != null) {
            return View::make('chances.create')->with('vehicles', $vehicles);
        } else {
            return View::make('vehicles.create')->with('message', 'You must add a vehicle to create a Chance');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $chance = Input::all();
        $chance['users_id'] = Auth::user()->id;
        Chance::create($chance);

        return Redirect::intended('/chanceslist');
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
