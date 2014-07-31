<?php

class Chance extends Eloquent {

    protected $table = 'chances';
    protected $fillable = array('fee', 'date', 'hour', 'destination', 'departure', 'capacity', 'comments', 'route', 'vehicles_id');

    public function vehicles() {
        return $this->belongsTo('Vehicle');
    }
    
    public function userofchances(){
        return $this->hasMany('UserofChance', 'chances_id', 'id');
    }
}
