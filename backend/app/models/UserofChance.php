<?php

class UserofChance extends Eloquent {

    protected $table = 'usersofchance';
    protected $fillable = array('chances_id','users_id');
    
    public function chances(){
        return $this->belongsTo('UserofChance');
    }
    
    public function users(){
        return $this->belongsTo('User');
    }

}
