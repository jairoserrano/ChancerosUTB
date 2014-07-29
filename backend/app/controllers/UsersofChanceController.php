<?php

class UsersofChanceController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //return View::make('chances.create')->with('vehicles', $vehicles);
    }

    /**
     * Store a newly created resource in storage.
     * In case that the user that creates the chance press "take chance" will
     * return to the chanceslist page with a message of error.
     * @return Response
     */
    public function store() {
        $data = Input::all();

        $idchance = $data['chances_id'];
        $iduser = Auth::user()->id;

        $data['users_id'] = $iduser;
        $chance = Chance::find($idchance);

        $userofchances = DB::table('usersofchance')
                ->where('chances_id', '=', $idchance)
                ->where('users_id', '=', $iduser)
                ->get();
        if ($userofchances != null) {
            return Redirect::intended('/chanceslist')->with('message', 'You have already taken this chance');
        }
        $vehicle = Vehicle::find($chance->vehicles_id);
        if ($vehicle->users_id == $iduser) {
            return Redirect::intended('/chanceslist')->with('message', 'You created this chance');
        } else {
            UserofChance::create($data);
            $chance->capacity = $chance->capacity - 1;
            $chance->save();
            return Redirect::intended('/chanceslist/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
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
