<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * 
 * @property int $id
 * @property string $name
 * @property string $sign
 * @property int $rate
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Currency extends Model
{
	protected $table = 'currencies';
	public $timestamps = false;

	protected $casts = [
		'rate' => 'int',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'name',
		'sign',
		'rate',
		'isRemoved'
	];
}
