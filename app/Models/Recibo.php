<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recibo
 * 
 * @property int $id
 * @property int|null $idc
 * @property Carbon|null $dataf
 * @property string|null $prestador
 * @property string|null $nome
 * @property int|null $fatura
 * @property string|null $tipo_pgto
 * @property string|null $obs
 * @property float|null $tothonorarios
 * @property float|null $totcustas
 * @property float|null $total
 * @property float|null $iva
 * @property string|null $parceria
 * @property float|null $valor
 * 
 * @property Collection|Recibopg[] $recibopgs
 * @property Collection|Recibosub[] $recibosubs
 *
 * @package App\Models
 */
class Recibo extends Model
{
	protected $table = 'recibo';
	public $timestamps = false;

	protected $casts = [
		'idc' => 'int',
		'fatura' => 'int',
		'tothonorarios' => 'float',
		'totcustas' => 'float',
		'total' => 'float',
		'iva' => 'float',
		'valor' => 'float'
	];

	protected $dates = [
		'dataf'
	];

	protected $fillable = [
		'idc',
		'dataf',
		'prestador',
		'nome',
		'fatura',
		'tipo_pgto',
		'obs',
		'tothonorarios',
		'totcustas',
		'total',
		'iva',
		'parceria',
		'valor'
	];

	public function recibopgs()
	{
		return $this->hasMany(Recibopg::class, 'idRec');
	}

	public function recibosubs()
	{
		return $this->hasMany(Recibosub::class, 'idRec');
	}
}
