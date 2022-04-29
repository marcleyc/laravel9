<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Financeiro
 * 
 * @property int $id
 * @property Carbon|null $dataf
 * @property string|null $banco
 * @property string|null $tipo
 * @property string|null $historico
 * @property string|null $numero
 * @property float|null $valor
 * @property int|null $cliente
 * @property string|null $obs
 *
 * @package App\Models
 */
class Financeiro extends Model
{
	protected $table = 'financeiro';
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'cliente' => 'int'
	];

	protected $dates = [
		'dataf'
	];

	protected $fillable = [
		'dataf',
		'banco',
		'tipo',
		'historico',
		'numero',
		'valor',
		'cliente',
		'obs'
	];
}
