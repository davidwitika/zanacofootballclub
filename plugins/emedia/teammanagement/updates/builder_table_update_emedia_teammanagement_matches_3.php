<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementMatches3 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_matches', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_matches', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
