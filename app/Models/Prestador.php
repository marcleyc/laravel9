<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestador
 * 
 * @property int $ID
 * @property string|null $nomep
 *
 * @package App\Models
 */
class Prestador extends Model
{
	protected $table = 'prestador';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'nomep'
	];
}
