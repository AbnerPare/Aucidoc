<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   
     public function up()
     {
         Schema::create('personnels', function (Blueprint $table) {
             $table->id();
             $table->string('Nom');
             $table->string('Prénom');
             $table->string('Email')->unique();
             $table->string('Téléphone');
             $table->string('Département');
             $table->string('Statut_de_présence');
             $table->string('Precision');
             $table->timestamps();
 
         });
     }
     public function down()
     {
         Schema::dropIfExists('personnels');
     }
 };

  
