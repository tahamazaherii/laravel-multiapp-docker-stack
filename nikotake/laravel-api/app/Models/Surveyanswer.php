<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Surveyanswer
 * 
 * @property int $id
 * @property int $questionId
 * @property int $answerId
 * @property int $surveyId
 *
 * @package App\Models
 */
class Surveyanswer extends Model
{
	protected $table = 'surveyanswers';
	public $timestamps = false;

	protected $casts = [
		'questionId' => 'int',
		'answerId' => 'int',
		'surveyId' => 'int'
	];

	protected $fillable = [
		'questionId',
		'answerId',
		'surveyId'
	];
}
