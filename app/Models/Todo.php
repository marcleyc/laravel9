<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Todo
 * 
 * @property string|null $task
 * @property int $id
 *
 * @package App\Models
 */
class Todo extends Model
{
	protected $table = 'todo';
	public $timestamps = false;

	protected $fillable = [
		'task'
	];
}
