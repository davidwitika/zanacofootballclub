<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementPlayers2 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->decimal('height', 6, 2)->change();
            $table->decimal('weight', 6, 2)->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_players', function($table)
        {
            $table->decimal('height', 3, 2)->change();
            $table->decimal('weight', 3, 2)->change();
            $table->string('slug', 191)->change();
        });
    }
}
