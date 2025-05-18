<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preorderdevice
 * 
 * @property int $id
 * @property int $preorderId
 * @property int $deviceId
 * @property int $currencyId
 * @property int $conditionId
 * @property int $qty
 * @property int $price
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Preorderdevice extends Model
{
	protected $table = 'preorderdevices';
	public $timestamps = false;

	protected $casts = [
		'preorderId' => 'int',
		'deviceId' => 'int',
		'currencyId' => 'int',
		'conditionId' => 'int',
		'qty' => 'int',
		'price' => 'int',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'preorderId',
		'deviceId',
		'currencyId',
		'conditionId',
		'qty',
		'price',
		'isRemoved'
	];
}
