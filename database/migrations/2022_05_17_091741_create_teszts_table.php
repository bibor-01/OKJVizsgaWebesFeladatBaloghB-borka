<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string("kerdes");
            $table->string("v1");
            $table->string("v2");
            $table->string("v3");
            $table->string("v4");
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });

        DB::table('teszts')->insert([
            ['kerdes' => "A papírt milyen színű szelektív kukába gyűjtjük?","v1"=>"kék","v2"=>"piros","v3"=>"szürke","v4"=>"sárga","kategoriaId"=>2],
            ['kerdes' => "Melyik komposztalhatóak","v1"=>"zöldség-gyümölcs","v2"=>"fatörzs","v3"=>"fém,műanyag","v4"=>"ruhanemű","kategoriaId"=>1],
            ['kerdes' => "Melyik a helyes viselkedés?","v1"=>"Fogmosásnál nem zárom el a csapot.","v2"=>"A kuka mellé dobom a szemetet.","v3"=>"Szelektíven gyűjtöm a szemetet","v4"=>"Az olajat a lefolyóba öntöm.","kategoriaId"=>1],
            ['kerdes' => "Melyiket nem szabad a műanyag szelektíves kukába dobni?","v1"=>"zöldség-gyümölcs","v2"=>"papír","v3"=>"műanyag szatyor","v4"=>"ruhanemű","kategoriaId"=>2],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teszts');
    }
};
