<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Finbanco
 * 
 * @property int $ID
 * @property string|null $banco
 *
 * @package App\Models
 */
class Finbanco extends Model
{
	protected $table = 'finbanco';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'banco'
	];
}
