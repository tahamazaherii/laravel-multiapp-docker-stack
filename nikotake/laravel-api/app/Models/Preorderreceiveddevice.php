<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Preorderreceiveddevice
 * 
 * @property int $id
 * @property int $preorderId
 * @property int $preorderDevicesId
 * @property int $preorderReceiveId
 * @property int $qty
 * @property Carbon $date
 * @property Carbon $regDate
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Preorderreceiveddevice extends Model
{
	protected $table = 'preorderreceiveddevices';
	public $timestamps = false;

	protected $casts = [
		'preorderId' => 'int',
		'preorderDevicesId' => 'int',
		'preorderReceiveId' => 'int',
		'qty' => 'int',
		'date' => 'datetime',
		'regDate' => 'datetime',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'preorderId',
		'preorderDevicesId',
		'preorderReceiveId',
		'qty',
		'date',
		'regDate',
		'isRemoved'
	];
}
