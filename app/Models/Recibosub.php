<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recibosub
 * 
 * @property int $id
 * @property int|null $idRec
 * @property string|null $servicos
 * @property string|null $nome
 * @property float|null $honorarios
 * @property float|null $custas
 * @property float|null $total
 * @property string|null $locals
 * @property Carbon|null $inicio
 * @property string|null $nprocesso
 * @property Carbon|null $termino
 * @property string $ok
 * 
 * @property Recibo|null $recibo
 *
 * @package App\Models
 */
class Recibosub extends Model
{
	protected $table = 'recibosub';
	public $timestamps = false;

	protected $casts = [
		'idRec' => 'int',
		'honorarios' => 'float',
		'custas' => 'float',
		'total' => 'float'
	];

	protected $dates = [
		'inicio',
		'termino'
	];

	protected $fillable = [
		'idRec',
		'servicos',
		'nome',
		'honorarios',
		'custas',
		'total',
		'locals',
		'inicio',
		'nprocesso',
		'termino',
		'ok'
	];

	public function recibo()
	{
		return $this->belongsTo(Recibo::class, 'idRec');
	}
}
