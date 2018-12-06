<?php namespace Cmantikweb\Portafolio\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddOrderPortafoliosTable extends Migration
{
    public function up()
    {
        Schema::table('cmantikweb_portafolio_portafolios', function (Blueprint $table) {
            $table->integer('order')->nullable();
        });
    }

    public function down()
    {
        Schema::table('cmantikweb_portafolio_portafolios', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
}
