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
            $table->float ('Este',9,4);
            $table->float('Norte',9,4);
            $table->text ('Nom_Cientifico');
            $table->String('Familia',45);
            $table->String ('Nom_Comun',45);
            $table->unsignedBigInteger('Origen_id');
            $table->unsignedBigInteger('Econservacion_id');
            $table->unsignedBigInteger ('Habito_id');
            $table->unsignedBigInteger ('Tipo_id');
            $table->unsignedBigInteger ('Sitio_id');
            $table->unsignedBigInteger ('Estado_id');
            $table->unsignedBigInteger ('Raiz_id');
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

            $table->foreign('Origen_id')
            ->references('id')->on('origens')
            ->onDelete('set null');

            $table->foreign('Econservacion_id')
            ->references('id')->on('estd_conservas')
            ->onDelete('set null');

            $table->foreign('Habito_id')
            ->references('id')->on('habitos')
            ->onDelete('set null');

            $table->foreign('Tipo_id')
            ->references('id')->on('tipos')
            ->onDelete('set null');

            $table->foreign('Sitio_id')
            ->references('id')->on('sitios')
            ->onDelete('set null');

            $table->foreign('Estado_id')
            ->references('id')->on('estados')
            ->onDelete('set null');

            $table->foreign('Raiz_id')
            ->references('id')->on('raizs')
            ->onDelete('set null');

            $table->timestamps();
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
