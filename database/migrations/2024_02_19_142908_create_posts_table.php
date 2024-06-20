<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    // テーブル作成
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // 自動インクリメントID
            $table->string('title'); // タイトル
            $table->text('content'); // 内容
            $table->timestamps(); // 作成日時と更新日時
        });
    }

    // テーブル削除
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}