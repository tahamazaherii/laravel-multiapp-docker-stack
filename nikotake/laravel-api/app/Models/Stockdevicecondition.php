<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Stockdevicecondition
 * 
 * @property int $id
 * @property int $stockdeviceId
 * @property int $deviceConditionId
 * @property int $inserterId
 * @property Carbon $regDate
 *
 * @package App\Models
 */
class Stockdevicecondition extends Model
{
	protected $table = 'stockdeviceconditions';
	public $timestamps = false;

	protected $casts = [
		'stockdeviceId' => 'int',
		'deviceConditionId' => 'int',
		'inserterId' => 'int',
		'regDate' => 'datetime'
	];

	protected $fillable = [
		'stockdeviceId',
		'deviceConditionId',
		'inserterId',
		'regDate'
	];
}
