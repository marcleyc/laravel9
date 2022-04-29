<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cstatus
 * 
 * @property string $status
 *
 * @package App\Models
 */
class Cstatus extends Model
{
	protected $table = 'cstatus';
	protected $primaryKey = 'status';
	public $incrementing = false;
	public $timestamps = false;
}
