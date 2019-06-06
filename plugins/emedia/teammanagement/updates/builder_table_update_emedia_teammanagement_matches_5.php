<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementMatches5 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_matches', function($table)
        {
            $table->integer('score_home')->nullable()->change();
            $table->integer('score_away')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_matches', function($table)
        {
            $table->integer('score_home')->nullable(false)->change();
            $table->integer('score_away')->nullable(false)->change();
        });
    }
}
