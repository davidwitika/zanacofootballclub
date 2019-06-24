<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementStaff11 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->integer('staff_department_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->dropColumn('staff_department_id');
        });
    }
}
