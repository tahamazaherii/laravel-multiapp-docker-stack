<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Content
 * 
 * @property int $id
 * @property string $name
 * @property string $pname
 * @property string $content
 *
 * @package App\Models
 */
class Content extends Model
{
	protected $table = 'contents';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'pname',
		'content'
	];
}
