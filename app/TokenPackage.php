<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TokenPackage extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'token_packages';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'token', 'price', 'description'];

}