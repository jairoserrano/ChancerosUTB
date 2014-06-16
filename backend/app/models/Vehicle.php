<?php

class Vehicle extends Eloquent {

    protected $table = 'vehicles';

    public function users() {
        return $this->belongsTo('Vehicle');
    }

}
