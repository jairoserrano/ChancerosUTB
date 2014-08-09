<?php

class Rated extends \Eloquent {
	protected $fillable = array('comments', 'rate', 'users_id', 'raters_id', 'chances_id');
        
        public function users(){
            return $this->belongsTo('User');
        }
        
        public function raters(){
            return $this->hasOne('Rater');
        }
        
        public function chances(){
            return $this->belongsTo('Chance');
        }
}