<?php namespace Larabook\Maps;

use Eloquent, Hash;

class markers extends Eloquent {

    protected $fillable = [];

    protected $table = 'markers';


    public function getMarkers()
    {
        return markers::all()->toArray();
        //return markers::findOrFail(1);
    }
}
