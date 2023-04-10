<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('val');
            $table->timestamps();
        });
        \App\Models\Settings::insert([
            ['name' => 'Our happy customers for year', 'val' => '50 000'],
            ['name' => 'Our lucky partners', 'val' => '35'],
            ['name' => 'Our cows at your service', 'val' => '300'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
