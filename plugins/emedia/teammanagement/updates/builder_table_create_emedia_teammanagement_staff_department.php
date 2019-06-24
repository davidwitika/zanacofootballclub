<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmediaTeammanagementStaffDepartment extends Migration
{
    public function up()
    {
        Schema::create('emedia_teammanagement_staff_department', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emedia_teammanagement_staff_department');
    }
}
