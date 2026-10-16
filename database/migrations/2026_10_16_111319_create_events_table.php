<?php

use App\Models\Trader;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('time');
            $table->string('address');
            $table->foreignId('trader_id')->constrained();
            $table->timestamps();
        });

        DB::table('events')-> insert([
            [
                'name'=>"Ballagás",
                'time'=>"2027-6-5 10:15:34",
                'address'=>"Siófok",
                'trader_id'=>3
            ],
            [
                'name'=>"Babaváró buli",
                'time'=>"2030-9-27 17:30:34",
                'address'=>"Olaszországi luxus nyaraló",
                'trader_id'=>2
            ],
            [
                'name'=>"Nemegybuli",
                'time'=>"2026-12-10 20:45:50",
                'address'=>"Tápiószecső, Aladár utca 35.",
                'trader_id'=>1
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
