<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $roleId
 * @property int $personId
 * @property int $isAdmin
 * @property int $isRepairMan
 * @property Carbon|null $lastLoggedIn
 * @property bool $isDisabled
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	public $timestamps = false;

	protected $casts = [
		'roleId' => 'int',
		'personId' => 'int',
		'isAdmin' => 'int',
		'isRepairMan' => 'int',
		'lastLoggedIn' => 'datetime',
		'isDisabled' => 'bool'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'roleId',
		'personId',
		'isAdmin',
		'isRepairMan',
		'lastLoggedIn',
		'isDisabled'
	];
}
