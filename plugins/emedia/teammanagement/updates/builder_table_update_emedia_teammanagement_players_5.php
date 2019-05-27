<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementPlayers5 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->string('home_town');
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->dropColumn('home_town');
        });
    }
}
