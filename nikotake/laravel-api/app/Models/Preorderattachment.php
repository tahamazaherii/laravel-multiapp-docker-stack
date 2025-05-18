<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preorderattachment
 * 
 * @property int $id
 * @property int $preorderId
 * @property string $fileName
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Preorderattachment extends Model
{
	protected $table = 'preorderattachments';
	public $timestamps = false;

	protected $casts = [
		'preorderId' => 'int',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'preorderId',
		'fileName',
		'isRemoved'
	];
}
