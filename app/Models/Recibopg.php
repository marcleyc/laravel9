<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recibopg
 * 
 * @property int $id
 * @property int|null $idRec
 * @property Carbon|null $venct
 * @property string|null $valor
 * @property Carbon|null $iva
 * @property Carbon|null $total
 * @property Carbon|null $nrec
 * @property Carbon|null $datapgiva
 * 
 * @property Recibo|null $recibo
 *
 * @package App\Models
 */
class Recibopg extends Model
{
	protected $table = 'recibopg';
	public $timestamps = false;

	protected $casts = [
		'idRec' => 'int'
	];

	protected $dates = [
		'venct',
		'iva',
		'total',
		'nrec',
		'datapgiva'
	];

	protected $fillable = [
		'idRec',
		'venct',
		'valor',
		'iva',
		'total',
		'nrec',
		'datapgiva'
	];

	public function recibo()
	{
		return $this->belongsTo(Recibo::class, 'idRec');
	}
}
