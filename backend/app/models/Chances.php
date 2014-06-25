<?php

class Chances extends Eloquent {

    protected $table = 'Chances';
    protected $fillable = array('fee', 'date', 'destination', 'departure', 'capacity', 'comments', 'route', 'vehicles_id');

    public function vehicles() {
        return $this->belongsTo('Chances');
    }

}