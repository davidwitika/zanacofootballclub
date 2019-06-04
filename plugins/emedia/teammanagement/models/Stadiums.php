<?php namespace emedia\TeamManagement\Models;

use Model;

/**
 * Model
 */
class Stadiums extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'emedia_teammanagement_stadiums';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
