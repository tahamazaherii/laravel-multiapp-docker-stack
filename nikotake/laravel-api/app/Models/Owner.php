<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Owner
 * 
 * @property int $id
 * @property string $name
 * @property int $userId
 * @property Carbon $registerDate
 * @property bool $isDisabled
 *
 * @package App\Models
 */
class Owner extends Model
{
	protected $table = 'owners';
	public $timestamps = false;

	protected $casts = [
		'userId' => 'int',
		'registerDate' => 'datetime',
		'isDisabled' => 'bool'
	];

	protected $fillable = [
		'name',
		'userId',
		'registerDate',
		'isDisabled'
	];
}
