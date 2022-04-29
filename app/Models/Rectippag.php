<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rectippag
 * 
 * @property string $tipo
 *
 * @package App\Models
 */
class Rectippag extends Model
{
	protected $table = 'rectippag';
	protected $primaryKey = 'tipo';
	public $incrementing = false;
	public $timestamps = false;
}
