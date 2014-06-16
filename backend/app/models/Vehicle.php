<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Vehicle extends Eloquent {

    protected $table = 'vehicles';

    public function users() {
        return $this->belongsTo('Vehicle');
    }
}