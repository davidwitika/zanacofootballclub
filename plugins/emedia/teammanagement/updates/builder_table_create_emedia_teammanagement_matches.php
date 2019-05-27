<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmediaTeammanagementMatches extends Migration
{
    public function up()
    {
        Schema::create('emedia_teammanagement_matches', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->integer('team_home')->unsigned();
            $table->integer('team_away')->unsigned();
            $table->integer('score_home')->unsigned();
            $table->integer('score_away')->unsigned();
            $table->dateTime('match_date');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emedia_teammanagement_matches');
    }
}
