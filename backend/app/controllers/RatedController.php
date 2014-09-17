<?php

class RatedController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /rated
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /rated/create
     *
     * @return Response
     */
    public function create() {
        $array = Input::all();
        $chance = Chance::find($array['chances_id']);
//        dd($chance->userofchances[0]->users);
        if ($chance->vehicles->users->id == Auth::user()->id) {
            return View::make('rate.ratechance', compact('chance'));
        } else {
            return View::make('rate.ratepassengerchance', compact('chance'));
        }
    }

    /**
     * Store a newly created resource in storage.
     * POST /rated
     *
     * @return Response
     */
    public function store() {
        $rate = Input::all();
        $array = Array('users_id' => Auth::user()->id);
        $rater = Rater::create($array);
        $rate['raters_id'] = $rater->id;
        Rated::create($rate);
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     * GET /rated/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /rated/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /rated/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /rated/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
