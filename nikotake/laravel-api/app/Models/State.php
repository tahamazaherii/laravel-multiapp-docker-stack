<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 * 
 * @property int $id
 * @property string $name
 * @property bool $isShowDashboard
 * @property bool $isSendSms
 * @property int $sort
 * @property int $isRemoved
 *
 * @package App\Models
 */
class State extends Model
{
	protected $table = 'states';
	public $timestamps = false;

	protected $casts = [
		'isShowDashboard' => 'bool',
		'isSendSms' => 'bool',
		'sort' => 'int',
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'name',
		'isShowDashboard',
		'isSendSms',
		'sort',
		'isRemoved'
	];
}
