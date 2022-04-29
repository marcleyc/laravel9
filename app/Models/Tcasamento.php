<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tcasamento
 * 
 * @property int $id
 * @property int|null $idc
 * @property string|null $nubente1
 * @property Carbon|null $nasc1
 * @property string|null $estCivil1
 * @property string|null $naturalidade1
 * @property string|null $nacionalidade1
 * @property string|null $pai1
 * @property string|null $mae1
 * @property string|null $residencia1
 *
 * @package App\Models
 */
class Tcasamento extends Model
{
	protected $table = 'tcasamento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'idc' => 'int'
	];

	protected $dates = [
		'nasc1'
	];

	protected $fillable = [
		'idc',
		'nubente1',
		'nasc1',
		'estCivil1',
		'naturalidade1',
		'nacionalidade1',
		'pai1',
		'mae1',
		'residencia1'
	];
}
