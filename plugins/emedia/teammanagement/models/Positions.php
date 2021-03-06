<?php namespace emedia\TeamManagement\Models;

use Model;

/**
 * Model
 */
class Positions extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'emedia_teammanagement_positions';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
