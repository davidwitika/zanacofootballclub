<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementPlayers8 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->string('name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('slug');
        });
    }
}
