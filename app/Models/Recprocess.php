<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recprocess
 * 
 * @property int $id
 * @property int|null $idrecsub
 * @property Carbon|null $datae
 * @property string|null $locals
 * @property string|null $descricao
 * @property string|null $numero
 * @property float|null $valor
 * @property Carbon|null $conclusao
 *
 * @package App\Models
 */
class Recprocess extends Model
{
	protected $table = 'recprocess';
	public $timestamps = false;

	protected $casts = [
		'idrecsub' => 'int',
		'valor' => 'float'
	];

	protected $dates = [
		'datae',
		'conclusao'
	];

	protected $fillable = [
		'idrecsub',
		'datae',
		'locals',
		'descricao',
		'numero',
		'valor',
		'conclusao'
	];
}
