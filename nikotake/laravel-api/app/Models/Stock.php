<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Stock
 * 
 * @property int $id
 * @property int $typeId
 * @property int $warehouseId
 * @property int $qty
 * @property int $isIncrease
 * @property int|null $personId
 * @property string|null $invoice
 * @property string $reason
 * @property string|null $description
 * @property Carbon|null $date
 * @property Carbon $regDate
 * @property int $inserterId
 * @property int $editorId
 *
 * @package App\Models
 */
class Stock extends Model
{
	protected $table = 'stock';
	public $timestamps = false;

	protected $casts = [
		'typeId' => 'int',
		'warehouseId' => 'int',
		'qty' => 'int',
		'isIncrease' => 'int',
		'personId' => 'int',
		'date' => 'datetime',
		'regDate' => 'datetime',
		'inserterId' => 'int',
		'editorId' => 'int'
	];

	protected $fillable = [
		'typeId',
		'warehouseId',
		'qty',
		'isIncrease',
		'personId',
		'invoice',
		'reason',
		'description',
		'date',
		'regDate',
		'inserterId',
		'editorId'
	];
}
