<?php namespace emedia\TeamManagement\Models;

use Model;

/**
 * Model
 */
class StaffDepartments extends Model {
	use \October\Rain\Database\Traits\Validation;

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'emedia_teammanagement_staff_department';

	/**
	 * @var array Validation rules
	 */
	public $rules = [
	];

	public $belongsTo = [
		'department' => [
			'emedia\TeamManagement\Models\StaffDepartments',
			'key' => 'staff_department_id',
			'otherkey' => 'id',
		],
	];
}
