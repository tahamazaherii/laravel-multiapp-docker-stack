<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * 
 * @property int $id
 * @property string $name
 * @property string $pname
 * @property string|null $url
 * @property string $icon
 * @property int|null $parentmenu
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Menu extends Model
{
	protected $table = 'menus';
	public $timestamps = false;

	protected $casts = [
		'parentmenu' => 'int',
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'name',
		'pname',
		'url',
		'icon',
		'parentmenu',
		'isRemoved'
	];
}
