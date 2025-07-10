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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id')->commnet('グループID');
            $table->integer('id_in_local')->commnet('ローカルでの医療機関ID');
            $table->string('name', 64)->commnet('医療機関名');
            $table->string('code', 20)->unique()->comment('医療機関コード');
            $table->integer('sort_number')->commnet('表示順序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
};
