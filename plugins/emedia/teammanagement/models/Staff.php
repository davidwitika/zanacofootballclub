<?php namespace emedia\TeamManagement\Models;

use Model;

/**
 * Model
 */
class Staff extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

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
        'position' => [
            'emedia\TeamManagement\Models\StaffPositions'
        ]
    ];

    public function beforeSave()
    {
        // Autogenerate name
        if (empty($this->name)) {
            $this->name = $this->first_name . ' ' . $this->model . ' ' . $this->variant;
        }

        // Force creation of slug
        if (empty($this->slug)) {
            unset($this->slug);
            $this->setSluggedValue('slug', 'name');
        }
}
