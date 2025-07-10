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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id')->commnet('グループID');
            $table->string('id_in_local', 32)->commnet('ローカルでの患者ID');
            $table->string('code', 64)->comment('患者コード');
            $table->string('name', 64)->comment('名前');
            $table->string('name_kana', 64)->nullable()->comment('名前（カナ）');
            $table->date('birthday')->nullable()->comment('誕生日');
            $table->char('sex', 12)->nullable()->comment('性別');
            $table->string('postal_code', 64)->nullable()->comment('郵便番号');
            $table->string('address_one', 1024)->nullable()->comment('住所1');
            $table->string('address_two', 1024)->nullable()->comment('住所2');
            $table->string('telephone_number', 32)->nullable()->comment('電話番号');
            $table->string('mobile_number', 32)->nullable()->comment('携帯電話番号');
            $table->string('fax_number', 32)->nullable()->comment('FAX番号');
            $table->string('search_name', 128)->nullable()->comment('漢字検索用スペース無');
            $table->string('search_name_kana', 128)->nullable()->comment('カナ検索用スペース無');
            $table->text('other_id')->nullable()->comment('');
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
        Schema::dropIfExists('patients');
    }
};
