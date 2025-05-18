<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Device
 * 
 * @property int $id
 * @property string $name
 * @property int $brandId
 * @property int $deviceSerieId
 * @property int $deviceTypeId
 * @property float $price
 * @property int $currencyId
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Device extends Model
{
	protected $table = 'devices';
	public $timestamps = false;

	protected $casts = [
		'brandId' => 'int',
		'deviceSerieId' => 'int',
		'deviceTypeId' => 'int',
		'price' => 'float',
		'currencyId' => 'int',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'name',
		'brandId',
		'deviceSerieId',
		'deviceTypeId',
		'price',
		'currencyId',
		'isRemoved'
	];
}
