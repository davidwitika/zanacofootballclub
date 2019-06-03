<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmediaTeammanagementStaffPositions extends Migration
{
    public function up()
    {
        Schema::create('emedia_teammanagement_staff_positions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emedia_teammanagement_staff_positions');
    }
}
