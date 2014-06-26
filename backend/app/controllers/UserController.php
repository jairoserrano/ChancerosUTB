<?php

class UserController extends \BaseController {

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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {        
        $post_data = Input::all();
        Mail::send('emails.welcome',$data = array('post_data' => $post_data), function($message)
        {
            $data = Input::all();
            $data['password'] = Hash::make($data['password']);
            $data['status'] = true;
            User::create($data);
            $message->to($data['email'], $data['name'])->subject('Welcome to ChancerosUTB!');
        });
        return Redirect::intended('/login');
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
