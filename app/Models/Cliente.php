<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property int|null $idc
 * @property string|null $nome
 * @property string|null $sexo
 * @property string|null $estcivil
 * @property string|null $nacionalidade
 * @property string|null $freguesia
 * @property string|null $concelho
 * @property string|null $pai
 * @property string|null $mae
 * @property string|null $morada
 * @property string|null $passapote
 * @property Carbon|null $emissao
 * @property string|null $emissor
 * @property string|null $cpf
 * @property string|null $assento
 * @property string|null $obs
 * @property string|null $tel
 * @property string|null $email
 * 
 * @property Contato|null $contato
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	public $timestamps = false;

	protected $casts = [
		'idc' => 'int'
	];

	protected $dates = [
		'emissao'
	];

	protected $fillable = [
		'idc',
		'nome',
		'sexo',
		'estcivil',
		'nacionalidade',
		'freguesia',
		'concelho',
		'pai',
		'mae',
		'morada',
		'passapote',
		'emissao',
		'emissor',
		'cpf',
		'assento',
		'obs',
		'tel',
		'email'
	];

	public function contato()
	{
		return $this->belongsTo(Contato::class, 'idc');
	}
}
