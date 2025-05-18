<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Defect
 * 
 * @property int $id
 * @property string $name
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Defect extends Model
{
	protected $table = 'defects';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'name',
		'isRemoved'
	];
}
