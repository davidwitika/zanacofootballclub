<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmediaTeammanagementStaff extends Migration
{
    public function up()
    {
        Schema::create('emedia_teammanagement_staff', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name');
            $table->text('bio');
            $table->string('slug');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->text('excerpt')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emedia_teammanagement_staff');
    }
}
