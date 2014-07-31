<?php

class Vehicle extends Eloquent {

    protected $table = 'vehicles';
    protected $fillable = array('plate', 'color', 'model', 'capacity', 'type', 'brand', 'status', 'users_id');

    public function user() {
        return $this->belongsTo('User');
    }

    public function chances() {
        return $this->hasMany('Chance');
    }

}
