<?php namespace emedia\TeamManagement\Models;

use emedia\TeamManagement\Models\StaffDepartments;
use Model;
use Str;

/**
 * Model
 */
class Staff extends Model {
	use \October\Rain\Database\Traits\Validation;

	use \October\Rain\Database\Traits\SoftDelete;
	use \October\Rain\Database\Traits\Sortable;
	const SORT_ORDER = 'sort_order';

	protected $dates = ['deleted_at'];

	protected $slugs = ['slug' => 'name'];

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'emedia_teammanagement_staff';

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

	public function scopeApplyDepartment($query, $departmentSlug) {

		try {
			$department = StaffDepartments::whereSlug($departmentSlug)->firstOrFail();
			return $query->where('staff_department_id', $department->id);
		} catch (ModelNotFoundException $ex) {
			return Redirect::to('/404');
		}

	}

}