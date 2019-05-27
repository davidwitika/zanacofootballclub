<?php namespace emedia\TeamManagement\Models;

use Model;

/**
 * Model
 */
class Matches extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'emedia_teammanagement_matches';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [

        'match_team_away' => [
            'emedia\TeamManagement\Models\Teams', 
            'key' => 'team_away',
            'otherkey' => 'id'
        ],
        'match_team_home' => [
            'emedia\TeamManagement\Models\Teams',
            'key' => 'team_home',
            'otherkey' => 'id'
        ]
    ];
}
