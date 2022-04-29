<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servico
 * 
 * @property int $id
 * @property string|null $descricao
 * @property float|null $honorarios
 * @property float|null $emolumentos
 * @property float|null $total
 * @property string|null $obs
 * @property string|null $pdf
 *
 * @package App\Models
 */
class Servico extends Model
{
	protected $table = 'servicos';
	public $timestamps = false;

	protected $casts = [
		'honorarios' => 'float',
		'emolumentos' => 'float',
		'total' => 'float'
	];

	protected $fillable = [
		'descricao',
		'honorarios',
		'emolumentos',
		'total',
		'obs',
		'pdf'
	];
}
