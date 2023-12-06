<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_technology', function (Blueprint $table) {
            $table->id();
            // colonna in relazione con projects
            $table->unsignedBigInteger('project_id');

            // creazione FK
            $table->foreign('project_id')->references('id')->on('projects')->cascadeOnDelete(); // se viene eliminata un progetto viene eliminata la relazione nella tabella ponte

            // colonna in relazione con technologies
            $table->unsignedBigInteger('technology_id');

            // creazione FK
            $table->foreign('technology_id')->references('id')->on('projects')->cascadeOnDelete();  // se viene eliminata una tecnologia viene eliminata la relazione nella tabella ponte   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};
