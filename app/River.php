<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class River extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rivers';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'district_id', 'state_id', 'country_id'];

}