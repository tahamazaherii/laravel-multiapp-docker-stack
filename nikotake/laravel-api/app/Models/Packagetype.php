<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Packagetype
 * 
 * @property int $id
 * @property string $name
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Packagetype extends Model
{
	protected $table = 'packagetypes';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'name',
		'isRemoved'
	];
}
