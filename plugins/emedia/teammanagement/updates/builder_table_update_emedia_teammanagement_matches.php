<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementMatches extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_matches', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_matches', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
