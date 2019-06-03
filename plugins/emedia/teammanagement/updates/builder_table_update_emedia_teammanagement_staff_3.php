<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementStaff3 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->string('first_name');
            $table->string('last_name');
            $table->dropColumn('name');
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->string('name', 191);
        });
    }
}
