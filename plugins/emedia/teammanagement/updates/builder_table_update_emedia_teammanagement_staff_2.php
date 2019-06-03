<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementStaff2 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->integer('staff_position_id')->nullable();
            $table->string('name')->change();
            $table->string('slug')->change();
            $table->string('facebook')->change();
            $table->string('twitter')->change();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->dropColumn('staff_position_id');
            $table->string('name', 191)->change();
            $table->string('slug', 191)->change();
            $table->string('facebook', 191)->change();
            $table->string('twitter', 191)->change();
        });
    }
}
