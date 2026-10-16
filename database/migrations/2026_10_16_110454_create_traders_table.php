<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('traders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('country');
            $table->timestamps();
        });

        DB::table('traders')-> insert([
            [
                'name'=>"Mézga Géza",
                'description'=>"Családcentrikus, magyar",
                'country'=>"Magyarország"
            ],
            [
                'name'=>"Máris szomszéd",
                'description'=>"Magyar és Géza szomszédja",
                'country'=>"Magyarország"
            ],
            [
                'name'=>"Micimackó",
                'description'=>"Hatalmas bulikat szervez a kis mackó",
                'country'=>"Anglia"
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traders');
    }
};
