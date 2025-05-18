<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $family
 * @property string|null $company
 * @property string|null $mobile
 * @property string|null $ssn
 * @property string|null $email
 * @property string|null $address
 * @property string|null $economicCode
 * @property string|null $companyNationalId
 * @property int|null $provinceId
 * @property int|null $cityId
 * @property int $customerGroupId
 * @property string|null $phone
 * @property string|null $postalCode
 * @property Carbon $registerDate
 * @property bool $verified
 * @property bool $fullyUpdated
 * @property bool $isRemoved
 *
 * @package App\Models
 */
class Person extends Model
{
	protected $table = 'persons';
	public $timestamps = false;

	protected $casts = [
		'provinceId' => 'int',
		'cityId' => 'int',
		'customerGroupId' => 'int',
		'registerDate' => 'datetime',
		'verified' => 'bool',
		'fullyUpdated' => 'bool',
		'isRemoved' => 'bool'
	];

	protected $fillable = [
		'name',
		'family',
		'company',
		'mobile',
		'ssn',
		'email',
		'address',
		'economicCode',
		'companyNationalId',
		'provinceId',
		'cityId',
		'customerGroupId',
		'phone',
		'postalCode',
		'registerDate',
		'verified',
		'fullyUpdated',
		'isRemoved'
	];
}
