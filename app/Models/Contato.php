<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contato
 * 
 * @property int $id
 * @property Carbon|null $datac
 * @property string|null $nome
 * @property string|null $portugues
 * @property string|null $status
 * @property string|null $indicacao
 * @property string|null $obs
 * @property float|null $honorarios
 * @property string|null $cli
 * 
 * @property Collection|Cliente[] $clientes
 *
 * @package App\Models
 */
class Contato extends Model
{
	protected $table = 'contatos';
	public $timestamps = false;

	protected $casts = [
		'honorarios' => 'float'
	];

	protected $dates = [
		'datac'
	];

	protected $fillable = [
		'datac',
		'nome',
		'portugues',
		'status',
		'indicacao',
		'obs',
		'honorarios',
		'cli'
	];

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'idc');
	}
}
