<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthEvent
 * 
 * @property int $id
 * @property Carbon|null $time_stamp
 * @property string|null $client_ip
 * @property int|null $user_id
 * @property string|null $origin
 * @property string|null $description
 * 
 * @property AuthUser|null $auth_user
 *
 * @package App\Models
 */
class AuthEvent extends Model
{
	protected $table = 'auth_event';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'time_stamp'
	];

	protected $fillable = [
		'time_stamp',
		'client_ip',
		'user_id',
		'origin',
		'description'
	];

	public function auth_user()
	{
		return $this->belongsTo(AuthUser::class, 'user_id');
	}
}
