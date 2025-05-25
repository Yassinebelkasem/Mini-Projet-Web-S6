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
    Schema::create('voituers', function (Blueprint $table) {
        $table->id();
       // $table->foreignId('utilisateur_id')->constrained('users')->onDelete('cascade');
        $table->string('marque');
        $table->string('modele');
        $table->string('version')->nullable();
        $table->year('annee');
        $table->string('carburant');
        $table->string('transmission');
        $table->integer('kilometrage');
        $table->decimal('moteur', 3, 1)->nullable();  
        $table->integer('prix');
        $table->boolean('neuve')->default(false);
        $table->string('localisation');
        $table->text('description')->nullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voituers');
    }
};
