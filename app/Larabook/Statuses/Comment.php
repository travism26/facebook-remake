<?php namespace Larabook\Statuses;

class Comment extends Eloquent {

    protected $fillable = ['user_id','status_id', 'body'];

    /**
     * @return mixed
     */
    public function owner()
    {
        return $this->belongsTo('Larabook\Users\User', 'user_id');
    }

}