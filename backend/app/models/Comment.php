<?php

class Comment extends Eloquent {

    protected $table = 'comments';
    protected $fillable = array('chances_id','users_id','text');

    public function chances() {
        return $this->belongsTo('Chance');
    }
    public function users() {
        return $this->belongsTo('User');
    }

}
