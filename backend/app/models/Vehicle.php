<?php

class Vehicle extends Eloquent {

    protected $table = 'vehicles';
    protected $fillable = array('plate', 'color', 'model', 'capacity', 'type', 'users_id');

    public function users() {
        return $this->belongsTo('Vehicle');
    }

}