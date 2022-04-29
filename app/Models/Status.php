<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * 
 * @property int $id
 * @property string|null $sit
 *
 * @package App\Models
 */
class Status extends Model
{
	protected $table = 'status';
	public $timestamps = false;

	protected $fillable = [
		'sit'
	];
}
