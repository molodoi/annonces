<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title'); // un titre pour l'annonce
            $table->text('texte'); // un texte pour l'annonce
            $table->unsignedBigInteger('category_id'); // une clé étrangère pour la catégorie
            $table->unsignedBigInteger('region_id'); // une clé étrangère pour la région
            $table->unsignedBigInteger('user_id')->default(0); // une clé étrangère pour l’utilisateur
            $table->string('departement'); // le code du département
            $table->string('commune'); // le code de la commune
            $table->string('commune_name'); // le nom de la commune
            $table->string('commune_postal'); // le code postal de la commune
            $table->string('pseudo'); // le pseudonyme de celui qui dépose l’annonce
            $table->string('email'); // l'email de celui qui dépose l’annonce
            $table->date('limit'); // la date limite de la publication
            $table->boolean('active')->default(false); // l'état actif de l'annonce (si elle a été acceptée)
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
