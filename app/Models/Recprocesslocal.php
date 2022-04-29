<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recprocesslocal
 * 
 * @property int $ID
 * @property string|null $locals
 *
 * @package App\Models
 */
class Recprocesslocal extends Model
{
	protected $table = 'recprocesslocal';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'locals'
	];
}
