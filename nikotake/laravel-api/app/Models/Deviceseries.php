<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Deviceseries
 * 
 * @property int $id
 * @property string $name
 * @property int $brandId
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Deviceseries extends Model
{
	protected $table = 'deviceseries';
	public $timestamps = false;

	protected $casts = [
		'brandId' => 'int',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'name',
		'brandId',
		'isRemoved'
	];
}
