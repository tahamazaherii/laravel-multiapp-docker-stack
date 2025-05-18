<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reception
 * 
 * @property int $id
 * @property int|null $userId
 * @property int $personId
 * @property int $deviceId
 * @property string $serial
 * @property int|null $invoiceId
 * @property string|null $issue
 * @property int $deliveryType
 * @property string|null $description
 * @property string $defects
 * @property string $accessories
 * @property Carbon $receptionDate
 * @property int $inserterId
 * @property int|null $estimatedPrice
 * @property Carbon $regDate
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Reception extends Model
{
	protected $table = 'receptions';
	public $timestamps = false;

	protected $casts = [
		'userId' => 'int',
		'personId' => 'int',
		'deviceId' => 'int',
		'invoiceId' => 'int',
		'deliveryType' => 'int',
		'receptionDate' => 'datetime',
		'inserterId' => 'int',
		'estimatedPrice' => 'int',
		'regDate' => 'datetime',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'userId',
		'personId',
		'deviceId',
		'serial',
		'invoiceId',
		'issue',
		'deliveryType',
		'description',
		'defects',
		'accessories',
		'receptionDate',
		'inserterId',
		'estimatedPrice',
		'regDate',
		'isRemoved'
	];
}
