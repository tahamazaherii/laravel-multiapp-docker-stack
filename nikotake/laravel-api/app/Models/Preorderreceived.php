<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Preorderreceived
 * 
 * @property int $id
 * @property int $preorderId
 * @property int $warehouseId
 * @property Carbon $date
 * @property Carbon $regDate
 *
 * @package App\Models
 */
class Preorderreceived extends Model
{
	protected $table = 'preorderreceived';
	public $timestamps = false;

	protected $casts = [
		'preorderId' => 'int',
		'warehouseId' => 'int',
		'date' => 'datetime',
		'regDate' => 'datetime'
	];

	protected $fillable = [
		'preorderId',
		'warehouseId',
		'date',
		'regDate'
	];
}
