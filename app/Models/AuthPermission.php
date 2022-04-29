<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthPermission
 * 
 * @property int $id
 * @property int|null $group_id
 * @property string|null $name
 * @property string|null $table_name
 * @property int|null $record_id
 * 
 * @property AuthGroup|null $auth_group
 *
 * @package App\Models
 */
class AuthPermission extends Model
{
	protected $table = 'auth_permission';
	public $timestamps = false;

	protected $casts = [
		'group_id' => 'int',
		'record_id' => 'int'
	];

	protected $fillable = [
		'group_id',
		'name',
		'table_name',
		'record_id'
	];

	public function auth_group()
	{
		return $this->belongsTo(AuthGroup::class, 'group_id');
	}
}
