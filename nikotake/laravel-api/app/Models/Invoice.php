<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 * 
 * @property int $id
 * @property string $uid
 * @property int $personId
 * @property int $userId
 * @property Carbon $date
 * @property float $discount
 * @property int $hasVat
 * @property float $vatAmount
 * @property int $companyId
 * @property string|null $description
 * @property int|null $receptionId
 * @property int $type
 * @property int $isPeriodic
 * @property string|null $period
 * @property float $totalAmount
 * @property float $paAmount
 * @property Carbon $regDate
 * @property int $inserterId
 * @property int|null $topId
 * @property int|null $editorId
 * @property bool $hasEdit
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Invoice extends Model
{
	protected $table = 'invoices';
	public $timestamps = false;

	protected $casts = [
		'personId' => 'int',
		'userId' => 'int',
		'date' => 'datetime',
		'discount' => 'float',
		'hasVat' => 'int',
		'vatAmount' => 'float',
		'companyId' => 'int',
		'receptionId' => 'int',
		'type' => 'int',
		'isPeriodic' => 'int',
		'totalAmount' => 'float',
		'paAmount' => 'float',
		'regDate' => 'datetime',
		'inserterId' => 'int',
		'topId' => 'int',
		'editorId' => 'int',
		'hasEdit' => 'bool',
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'uid',
		'personId',
		'userId',
		'date',
		'discount',
		'hasVat',
		'vatAmount',
		'companyId',
		'description',
		'receptionId',
		'type',
		'isPeriodic',
		'period',
		'totalAmount',
		'paAmount',
		'regDate',
		'inserterId',
		'topId',
		'editorId',
		'hasEdit',
		'isRemoved'
	];
}
