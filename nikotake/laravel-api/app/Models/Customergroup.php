<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customergroup
 * 
 * @property int $id
 * @property string $name
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Customergroup extends Model
{
	protected $table = 'customergroups';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'name',
		'isRemoved'
	];
}
