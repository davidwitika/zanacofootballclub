<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementPlayers7 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->string('jersey_number', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->integer('jersey_number')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
