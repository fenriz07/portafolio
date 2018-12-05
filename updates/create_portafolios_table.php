<?php namespace Cmantikweb\Portafolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePortafoliosTable extends Migration
{
    public function up()
    {
        Schema::create('cmantikweb_portafolio_portafolios', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cmantikweb_portafolio_portafolios');
    }
}
