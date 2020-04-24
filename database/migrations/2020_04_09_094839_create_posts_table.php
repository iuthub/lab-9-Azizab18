<?php 

use Illuminate\Support\Facedes\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
	/**
	run the migrations.

     @return void
     */
     public function up()
     {
     	Schme::create('posts', function(Blueprint $table){
     		$table->increments('id');
     		$table->timestamps();
     		$table->string('title');
     		$table->text('content');
     	});
     }
     /*
     Reverse the migrations.

     @return void
      */
public function down(){

   }
}
?>