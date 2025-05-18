<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rolemenu
 * 
 * @property int $id
 * @property int $roleId
 * @property int $menuId
 *
 * @package App\Models
 */
class Rolemenu extends Model
{
	protected $table = 'rolemenus';
	public $timestamps = false;

	protected $casts = [
		'roleId' => 'int',
		'menuId' => 'int'
	];

	protected $fillable = [
		'roleId',
		'menuId'
	];
}
