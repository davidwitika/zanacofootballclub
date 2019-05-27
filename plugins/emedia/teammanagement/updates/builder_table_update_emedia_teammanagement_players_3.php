<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementPlayers3 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->string('facebook', 191)->nullable()->change();
            $table->string('twitter', 191)->nullable()->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->string('facebook', 191)->nullable(false)->change();
            $table->string('twitter', 191)->nullable(false)->change();
            $table->string('slug', 191)->change();
        });
    }
}
