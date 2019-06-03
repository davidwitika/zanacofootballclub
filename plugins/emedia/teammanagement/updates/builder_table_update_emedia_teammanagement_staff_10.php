<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementStaff10 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->string('position');
            $table->dropColumn('staff_position_id');
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->dropColumn('position');
            $table->integer('staff_position_id')->nullable();
        });
    }
}
