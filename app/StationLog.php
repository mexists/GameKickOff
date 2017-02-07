<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StationLog extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'station_logs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['station_id', 'datetime', 'abs_pres', 'temperature', 'coupler_detached', 'coupler_attached', 'host_connected', 'stopped', 'end_of_file'];

}