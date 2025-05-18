<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Guarantee
 * 
 * @property int $id
 * @property int $deviceNameId
 * @property string $serial
 * @property Carbon $startDate
 * @property Carbon $endDate
 * @property int|null $ownerId
 * @property int $userId
 * @property int|null $personId
 * @property string|null $invoice
 * @property string|null $govRefCode
 * @property Carbon $registerDate
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Guarantee extends Model
{
	protected $table = 'guarantee';
	public $timestamps = false;

	protected $casts = [
		'deviceNameId' => 'int',
		'startDate' => 'datetime',
		'endDate' => 'datetime',
		'ownerId' => 'int',
		'userId' => 'int',
		'personId' => 'int',
		'registerDate' => 'datetime',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'deviceNameId',
		'serial',
		'startDate',
		'endDate',
		'ownerId',
		'userId',
		'personId',
		'invoice',
		'govRefCode',
		'registerDate',
		'isRemoved'
	];
}
