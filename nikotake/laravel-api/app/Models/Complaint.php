<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Complaint
 * 
 * @property int $id
 * @property int $personId
 * @property string $subject
 * @property string $content
 * @property string $result
 * @property int $state
 * @property Carbon $regDate
 *
 * @package App\Models
 */
class Complaint extends Model
{
	protected $table = 'complaints';
	public $timestamps = false;

	protected $casts = [
		'personId' => 'int',
		'state' => 'int',
		'regDate' => 'datetime'
	];

	protected $fillable = [
		'personId',
		'subject',
		'content',
		'result',
		'state',
		'regDate'
	];
}
