<?php namespace Axi\Check\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDBautosTable extends Migration
{

    public function up()
    {
        Schema::create('axi_check_d_bautos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('districts');
            $table->string('schools');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('axi_check_d_bautos');
    }

}
