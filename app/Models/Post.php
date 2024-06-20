<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // フォームから送信されたデータの割り当て可能なフィールド
    protected $fillable = ['title', 'content'];
}