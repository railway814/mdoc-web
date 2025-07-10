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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id')->commnet('グループID');
            $table->integer('id_in_local')->commnet('ローカルでのタグID');
            $table->string('name', 64)->commnet('タグ名');
            $table->integer('sort_number')->commnet('表示順序');
            $table->dateTime('last_updated')->comment('最終更新日時');
            $table->boolean('is_deleted')->default(false)->comment('削除済み');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
};
