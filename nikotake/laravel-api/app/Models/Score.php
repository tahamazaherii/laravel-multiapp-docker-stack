<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Score
 * 
 * @property int $id
 * @property int|null $personId
 * @property int|null $userId
 * @property int $score
 * @property string $description
 * @property bool $isIncrease
 * @property Carbon $date
 *
 * @package App\Models
 */
class Score extends Model
{
	protected $table = 'scores';
	public $timestamps = false;

	protected $casts = [
		'personId' => 'int',
		'userId' => 'int',
		'score' => 'int',
		'isIncrease' => 'bool',
		'date' => 'datetime'
	];

	protected $fillable = [
		'personId',
		'userId',
		'score',
		'description',
		'isIncrease',
		'date'
	];
}
