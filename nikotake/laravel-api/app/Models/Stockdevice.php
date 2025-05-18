<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Stockdevice
 * 
 * @property int $id
 * @property int $stockId
 * @property int $deviceId
 * @property int|null $typeId
 * @property int $warehouseId
 * @property int $isIncrease
 * @property string $serial
 * @property int $deviceConditionId
 * @property string|null $description
 *
 * @package App\Models
 */
class Stockdevice extends Model
{
	protected $table = 'stockdevices';
	public $timestamps = false;

	protected $casts = [
		'stockId' => 'int',
		'deviceId' => 'int',
		'typeId' => 'int',
		'warehouseId' => 'int',
		'isIncrease' => 'int',
		'deviceConditionId' => 'int'
	];

	protected $fillable = [
		'stockId',
		'deviceId',
		'typeId',
		'warehouseId',
		'isIncrease',
		'serial',
		'deviceConditionId',
		'description'
	];
}
