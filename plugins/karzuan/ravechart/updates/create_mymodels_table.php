<?php namespace Karzuan\Ravechart\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMymodelsTable extends Migration
{

    public function up()
    {
        Schema::create('karzuan_ravechart_mymodels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('karzuan_ravechart_mymodels');
    }

}
