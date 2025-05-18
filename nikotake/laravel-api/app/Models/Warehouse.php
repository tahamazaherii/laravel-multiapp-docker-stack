<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Warehouse
 * 
 * @property int $id
 * @property string $name
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Warehouse extends Model
{
	protected $table = 'warehouses';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'name',
		'isRemoved'
	];
}
