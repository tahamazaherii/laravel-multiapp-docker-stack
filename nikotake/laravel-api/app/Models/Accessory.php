<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Accessory
 * 
 * @property int $id
 * @property string $name
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Accessory extends Model
{
	protected $table = 'accessories';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'name',
		'isRemoved'
	];
}
