<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementStaff7 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
