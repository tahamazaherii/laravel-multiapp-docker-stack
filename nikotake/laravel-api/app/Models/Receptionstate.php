<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Receptionstate
 * 
 * @property int $id
 * @property int $receptionId
 * @property int $stateId
 * @property int $userId
 * @property Carbon $regDate
 *
 * @package App\Models
 */
class Receptionstate extends Model
{
	protected $table = 'receptionstates';
	public $timestamps = false;

	protected $casts = [
		'receptionId' => 'int',
		'stateId' => 'int',
		'userId' => 'int',
		'regDate' => 'datetime'
	];

	protected $fillable = [
		'receptionId',
		'stateId',
		'userId',
		'regDate'
	];
}
