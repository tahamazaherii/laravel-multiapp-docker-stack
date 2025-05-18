<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property string $pName
 * @property int $isAdmin
 * @property int $isRepairMan
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	public $timestamps = false;

	protected $casts = [
		'isAdmin' => 'int',
		'isRepairMan' => 'int',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'name',
		'pName',
		'isAdmin',
		'isRepairMan',
		'isRemoved'
	];
}
