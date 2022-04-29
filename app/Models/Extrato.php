<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Extrato
 * 
 * @property Carbon|null $data
 * @property string|null $banco
 * @property string|null $descricao
 * @property float|null $valor
 * @property float|null $saldo
 * @property string|null $tipo
 *
 * @package App\Models
 */
class Extrato extends Model
{
	protected $table = 'extratos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'valor' => 'float',
		'saldo' => 'float'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'data',
		'banco',
		'descricao',
		'valor',
		'saldo',
		'tipo'
	];
}
