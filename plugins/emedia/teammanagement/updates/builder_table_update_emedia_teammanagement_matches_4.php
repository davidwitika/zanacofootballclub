<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementMatches4 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_matches', function($table)
        {
            $table->integer('stadium_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_matches', function($table)
        {
            $table->dropColumn('stadium_id');
        });
    }
}
