<?php

class CommentofChance extends Eloquent {

    protected $table = 'commentsofchance';
    protected $fillable = array('chances_id','users_id','text');

    public function chances() {
        return $this->belongsTo('CommentofChance');
    }
    public function users() {
        return $this->belongsTo('CommentofChance');
    }

}
