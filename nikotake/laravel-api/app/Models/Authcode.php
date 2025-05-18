<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Authcode
 * 
 * @property int $id
 * @property string $mobile
 * @property int $code
 * @property bool $isUsed
 *
 * @package App\Models
 */
class Authcode extends Model
{
	protected $table = 'authcodes';
	public $timestamps = false;

	protected $casts = [
		'code' => 'int',
		'isUsed' => 'bool'
	];

	protected $fillable = [
		'mobile',
		'code',
		'isUsed'
	];
}
