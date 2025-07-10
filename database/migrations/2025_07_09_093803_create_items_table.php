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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id')->commnet('グループID');
            $table->string('id_in_local', 40)->commnet('ローカルでの文書ID');
            $table->integer('institution_id')->commnet('医療機関ID');
            $table->integer('tag_id')->commnet('タグID');
            $table->integer('patient_id')->commnet('患者ID');
            $table->string('title', 128)->comment('文書タイトル');
            $table->string('file_path', 1024)->comment('ファイルの場所');
            $table->date('date')->comment('文書を扱う日付');
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
        Schema::dropIfExists('items');
    }
};
