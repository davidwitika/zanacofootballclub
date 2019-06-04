<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmediaTeammanagementStadiums extends Migration
{
    public function up()
    {
        Schema::table('emedia_teammanagement_stadiums', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('emedia_teammanagement_stadiums', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->string('name', 191)->change();
        });
    }
}
