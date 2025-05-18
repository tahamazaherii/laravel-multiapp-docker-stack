<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Stocktype
 * 
 * @property int $id
 * @property string $name
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Stocktype extends Model
{
	protected $table = 'stocktypes';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'name',
		'isRemoved'
	];
}
