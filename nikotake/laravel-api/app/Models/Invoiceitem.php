<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoiceitem
 * 
 * @property int $id
 * @property int $invoiceId
 * @property int $itemType
 * @property int $itemTypeId
 * @property float $price
 * @property int $qty
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Invoiceitem extends Model
{
	protected $table = 'invoiceitems';
	public $timestamps = false;

	protected $casts = [
		'invoiceId' => 'int',
		'itemType' => 'int',
		'itemTypeId' => 'int',
		'price' => 'float',
		'qty' => 'int',
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'invoiceId',
		'itemType',
		'itemTypeId',
		'price',
		'qty',
		'isRemoved'
	];
}
