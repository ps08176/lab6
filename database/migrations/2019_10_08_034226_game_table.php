<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('game_table', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('contac');
           
        });
        $faker = Faker\Factory::create();
        $limit=5;
        for($i = 0; $i<$limit; $i++){
            DB::table('game_table')->insert([
                'name'=>$faker->name,
                'contac'=>$faker->phoneNumber,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
