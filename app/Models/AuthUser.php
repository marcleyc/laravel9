<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthUser
 * 
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $password
 * @property string|null $registration_key
 * @property string|null $reset_password_key
 * @property string|null $registration_id
 * 
 * @property Collection|AuthEvent[] $auth_events
 * @property Collection|AuthMembership[] $auth_memberships
 *
 * @package App\Models
 */
class AuthUser extends Model
{
	protected $table = 'auth_user';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'password',
		'registration_key',
		'reset_password_key',
		'registration_id'
	];

	public function auth_events()
	{
		return $this->hasMany(AuthEvent::class, 'user_id');
	}

	public function auth_memberships()
	{
		return $this->hasMany(AuthMembership::class, 'user_id');
	}
}
