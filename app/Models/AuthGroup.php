<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthGroup
 * 
 * @property int $id
 * @property string|null $role
 * @property string|null $description
 * 
 * @property Collection|AuthMembership[] $auth_memberships
 * @property Collection|AuthPermission[] $auth_permissions
 *
 * @package App\Models
 */
class AuthGroup extends Model
{
	protected $table = 'auth_group';
	public $timestamps = false;

	protected $fillable = [
		'role',
		'description'
	];

	public function auth_memberships()
	{
		return $this->hasMany(AuthMembership::class, 'group_id');
	}

	public function auth_permissions()
	{
		return $this->hasMany(AuthPermission::class, 'group_id');
	}
}
