<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guaranteehistory
 * 
 * @property int $id
 * @property int $guaranteeId
 * @property int $activityId
 * @property string|null $description
 * @property int $userId
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Guaranteehistory extends Model
{
	protected $table = 'guaranteehistory';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'guaranteeId' => 'int',
		'activityId' => 'int',
		'userId' => 'int',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'id',
		'guaranteeId',
		'activityId',
		'description',
		'userId',
		'isRemoved'
	];
}
