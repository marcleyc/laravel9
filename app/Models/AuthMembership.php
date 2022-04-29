<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthMembership
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $group_id
 * 
 * @property AuthUser|null $auth_user
 * @property AuthGroup|null $auth_group
 *
 * @package App\Models
 */
class AuthMembership extends Model
{
	protected $table = 'auth_membership';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'group_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'group_id'
	];

	public function auth_user()
	{
		return $this->belongsTo(AuthUser::class, 'user_id');
	}

	public function auth_group()
	{
		return $this->belongsTo(AuthGroup::class, 'group_id');
	}
}
