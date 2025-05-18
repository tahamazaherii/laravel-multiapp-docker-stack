<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * 
 * @property int $id
 * @property string $name
 * @property bool|null $isRemoved
 * @property int $price
 *
 * @package App\Models
 */
class Service extends Model
{
	protected $table = 'services';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'bool',
		'price' => 'int'
	];

	protected $fillable = [
		'name',
		'isRemoved',
		'price'
	];
}
