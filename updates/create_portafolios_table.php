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
            $table->string('title')->default('Sin titulo');
            $table->text('description');

            /** Boton 1 */
            $table->string('b1')->default('Iniciar Sesion');
            $table->string('b1url')->default('https://facilcontabilidad.net');

            /** Boton 2 */
            $table->string('b2')->default('Comprar ahora');
            $table->string('b2url')->default('https://facilcontabilidad.net');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cmantikweb_portafolio_portafolios');
    }
}
