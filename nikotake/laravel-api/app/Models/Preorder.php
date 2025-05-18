<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Preorder
 * 
 * @property int $id
 * @property int $sendType
 * @property int $packageId
 * @property int $packageCount
 * @property int $carrierId
 * @property int $sellerId
 * @property int $transportType
 * @property int $priceTransport
 * @property int $transportCurrencyId
 * @property int $currencyId
 * @property int $isDeliver
 * @property int $inserterId
 * @property Carbon $date
 * @property Carbon $regDate
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Preorder extends Model
{
	protected $table = 'preorders';
	public $timestamps = false;

	protected $casts = [
		'sendType' => 'int',
		'packageId' => 'int',
		'packageCount' => 'int',
		'carrierId' => 'int',
		'sellerId' => 'int',
		'transportType' => 'int',
		'priceTransport' => 'int',
		'transportCurrencyId' => 'int',
		'currencyId' => 'int',
		'isDeliver' => 'int',
		'inserterId' => 'int',
		'date' => 'datetime',
		'regDate' => 'datetime',
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'sendType',
		'packageId',
		'packageCount',
		'carrierId',
		'sellerId',
		'transportType',
		'priceTransport',
		'transportCurrencyId',
		'currencyId',
		'isDeliver',
		'inserterId',
		'date',
		'regDate',
		'isRemoved'
	];
}
