<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Controller
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class Controller extends Model
{
	protected $table = 'controllers';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
