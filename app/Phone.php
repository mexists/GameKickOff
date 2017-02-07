<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * An Eloquent Model: 'Phone'
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $number
 * @property string $otp
 * @property integer $country_id
 * @property integer $phone_status_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Phone extends Model {
	const NUMBER_VALID = 1;
	const NUMBER_EXISTS = 2;
	const NUMBER_INVALID = 3;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'phones';

	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['number', 'otp', 'country_id', 'phone_status_id'];

}