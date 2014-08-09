<?php

class Rater extends \Eloquent {

    protected $fillable = array('users_id');

    public function users() {
        return $this->belongsTo('User');
    }

    public function rateds() {
        return $this->hasOne('Rated');
    }

}
