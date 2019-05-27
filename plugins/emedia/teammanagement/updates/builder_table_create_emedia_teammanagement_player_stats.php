<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmediaTeammanagementPlayerStats extends Migration
{
    public function up()
    {
        Schema::create('emedia_teammanagement_player_stats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('player_id');
            $table->integer('appearances');
            $table->integer('goals');
            $table->integer('clean_sheets');
            $table->integer('assists');
            $table->integer('yellow_cards');
            $table->integer('red_cards');
            $table->integer('minutes');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emedia_teammanagement_player_stats');
    }
}
