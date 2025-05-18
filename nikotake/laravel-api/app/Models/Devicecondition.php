<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Devicecondition
 * 
 * @property int $id
 * @property string $name
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Devicecondition extends Model
{
	protected $table = 'deviceconditions';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'name',
		'isRemoved'
	];
}
