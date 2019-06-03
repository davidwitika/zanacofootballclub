<?php namespace emedia\TeamManagement\Models;

use Model;
use Str;

/**
 * Model
 */
class Staff extends Model
{
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



}