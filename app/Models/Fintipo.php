<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fintipo
 * 
 * @property int $ID
 * @property string|null $tipo
 *
 * @package App\Models
 */
class Fintipo extends Model
{
	protected $table = 'fintipo';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'tipo'
	];
}
