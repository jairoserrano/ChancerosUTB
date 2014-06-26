<?php

class Chance extends Eloquent {

    protected $table = 'chances';
    protected $fillable = array('fee', 'date', 'destination', 'departure', 'capacity', 'comments', 'route', 'vehicles_id');

    public function vehicles() {
        return $this->belongsTo('Chances');
    }

}
