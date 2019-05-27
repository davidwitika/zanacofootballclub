<?php namespace emedia\TeamManagement\Models;

use Model;
Use \Carbon\Carbon;


/**
 * Model
 */
class Matches extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at','match_date'];


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

     public function scopeFixtures($query)
    {
        return $query->where('match_date', '>', Carbon::now());
    }

     public function scopeMatches($query)
    {
        return $query->where('match_date', '<', Carbon::now());
    }
}
