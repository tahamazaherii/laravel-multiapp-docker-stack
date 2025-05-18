<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Devicetype
 * 
 * @property int $id
 * @property string $name
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Devicetype extends Model
{
	protected $table = 'devicetypes';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'name',
		'isRemoved'
	];
}
