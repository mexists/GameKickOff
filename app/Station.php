<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stations';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'name', 'river_id', 'river_level', 'normal_level', 'alert_level', 'warning_level', 'danger_level'];

}