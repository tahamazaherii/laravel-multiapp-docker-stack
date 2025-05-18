<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Surveyquestion
 * 
 * @property int $id
 * @property string $question
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Surveyquestion extends Model
{
	protected $table = 'surveyquestions';
	public $timestamps = false;

	protected $casts = [
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'question',
		'isRemoved'
	];
}
