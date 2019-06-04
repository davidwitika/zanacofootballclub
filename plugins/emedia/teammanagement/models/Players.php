<?php namespace emedia\TeamManagement\Models;

use Model;

/**
 * Model
 */
class Players extends Model {
	use \October\Rain\Database\Traits\Validation;

	use \October\Rain\Database\Traits\SoftDelete;

	protected $dates = ['deleted_at', 'date_of_birth'];

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'emedia_teammanagement_players';

	/**
	 * @var array Validation rules
	 */
	public $rules = [
	];

	public $belongsTo = [
		'position' => [
			'emedia\TeamManagement\Models\Positions',
		],
		'team' => [
			'emedia\TeamManagement\Models\Teams',
		],
	];
}
