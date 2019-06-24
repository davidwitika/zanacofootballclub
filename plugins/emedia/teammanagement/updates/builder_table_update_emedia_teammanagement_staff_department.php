<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementStaffDepartment extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_staff_department', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_staff_department', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
