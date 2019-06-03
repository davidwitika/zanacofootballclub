<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteEmediaTeammanagementStaffPositions extends Migration
{
    public function up()
    {
        Schema::dropIfExists('emedia_teammanagement_staff_positions');
    }
    
    public function down()
    {
        Schema::create('emedia_teammanagement_staff_positions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
        });
    }
}
