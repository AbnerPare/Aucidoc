<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('fichedecongés', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prénom');
            $table->string('pdf_path')->nullable();
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
    Schema::dropIfExists('fichedecongés');
    Schema::table('fichedecongés', function (Blueprint $table) {
        $table->dropColumn('pdf_path');
    });
    
}
 };

