<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementStaff5 extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->integer('id')->unsigned()->change();
            $table->string('name')->change();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_staff', function($table)
        {
            $table->dropPrimary(['id']);
            $table->integer('id')->unsigned(false)->change();
            $table->string('name', 191)->change();
        });
    }
}
