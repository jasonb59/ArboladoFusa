<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbolados', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('Localizacion');
            $table->float ('Este');
            $table->float('Norte');
            $table->text ('Nom_Cientifico');
            $table->String('Familia',45);
            $table->String ('Nom_Comun',45);
            $table->bigInteger('Origen')->unsigned();
            $table->bigInteger('Econservacion')->unsigned();
            $table->bigInteger ('Habito')->unsigned();
            $table->bigInteger ('Tipo')->unsigned();
            $table->bigInteger ('Sitio')->unsigned();
            $table->bigInteger ('Estado')->unsigned();
            $table->bigInteger ('Raiz')->unsigned();
            $table-> text ('DAP_m');
            $table-> text ('Alt_Total');
            $table-> string ('Alt_Comercial',10);
            $table->text ('Grados');
            $table->string ('Norte_Sur', 10);
            $table->string ('Este_Oeste', 10);
            $table-> text('Ramas_Secas');
            $table->text ('Hongos');
            $table->text ('Insectos');
            $table-> text('Nidos');
            $table->text ('Abejas');
            $table->text ('Plantas');
            $table->text ('Epifetas');
            $table-> text('Moluscos');
            $table->text ('Tumores');
            $table-> text('Agallas');
            $table-> text('Aracnidos');
            $table-> text('U_Muestral');
            $table-> text('Area_Basal');
            $table-> text('Vol_Total');
            $table-> text('Vol_Comercial');
            $table-> text('Bv_t');
            $table-> text('BIOM_INDIV_Tn');
            $table-> text('CARB_INDIV_Tn');
            $table-> text ('Categ_diame');
            $table-> text('Estrato');
            $table->text ('Observaciones');

            $table->timestamps();

            $table->foreign('Origen')->references('id')->on('origens')->onDelete('set null');
            $table->foreign('Econservacion')->references('id')->on('estd_conservas')->onDelete('cascade');
            $table->foreign('Habito')->references('id')->on('habitos')->onDelete('cascade');
            $table->foreign('Tipo')->references('id')->on('tipos')->onDelete('cascade');
            $table->foreign('Sitio')->references('id')->on('sitios')->onDelete('cascade');
            $table->foreign('Estado')->references('id')->on('estados')->onDelete('cascade');
            $table->foreign('Raiz')->references('id')->on('raizs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arbolados');
    }
};
