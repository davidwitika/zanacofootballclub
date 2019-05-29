<?php namespace emedia\TeamManagement\Models;

use Model;

/**
 * Model
 */
class StaffPositions extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'emedia_teammanagement_staff_positions';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


     public $hasMany = [
        'staff_members' => [
            'emedia\TeamManagement\Models\Staff'
        ]
    ];
}
