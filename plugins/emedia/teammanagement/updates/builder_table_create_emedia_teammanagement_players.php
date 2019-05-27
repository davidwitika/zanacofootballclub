<?php namespace emedia\TeamManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmediaTeammanagementPlayers extends Migration
{
    public function up()
    {
        Schema::create('emedia_teammanagement_players', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('profile_image');
            $table->integer('position_id');
            $table->string('facebook');
            $table->string('twitter');
            $table->text('bio');
            $table->integer('jersey_number');
            $table->date('date_of_birth');
            $table->string('foot', 10);
            $table->decimal('height', 3, 2);
            $table->decimal('weight', 3, 2);
            $table->integer('team_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emedia_teammanagement_players');
    }
}
