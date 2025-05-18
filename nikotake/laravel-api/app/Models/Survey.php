<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Survey
 * 
 * @property int $id
 * @property int $personId
 * @property Carbon $regDate
 *
 * @package App\Models
 */
class Survey extends Model
{
	protected $table = 'surveys';
	public $timestamps = false;

	protected $casts = [
		'personId' => 'int',
		'regDate' => 'datetime'
	];

	protected $fillable = [
		'personId',
		'regDate'
	];
}
