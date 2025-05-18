<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string|null $phone
 * @property string|null $economicCode
 * @property string|null $companyNationalId
 * @property int|null $provinceId
 * @property int|null $cityId
 * @property string|null $postalCode
 * @property string|null $address
 * @property string|null $logo
 * @property string|null $email
 * @property string|null $invoiceDescription
 * @property int $isRemoved
 *
 * @package App\Models
 */
class Company extends Model
{
	protected $table = 'companies';
	public $timestamps = false;

	protected $casts = [
		'provinceId' => 'int',
		'cityId' => 'int',
		'isRemoved' => 'int'
	];

	protected $fillable = [
		'name',
		'phone',
		'economicCode',
		'companyNationalId',
		'provinceId',
		'cityId',
		'postalCode',
		'address',
		'logo',
		'email',
		'invoiceDescription',
		'isRemoved'
	];
}
