<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateCuidadors extends Migration{
	public function up(){ 
 		Schema::create('cuidadors', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('nombre');
			$table->integer('edad');
			$table->integer('salario');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}