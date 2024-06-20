# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

> **Note:** In the years since releasing Lumen, PHP has made a variety of wonderful performance improvements. For this reason, along with the availability of [Laravel Octane](https://laravel.com/docs/octane), we no longer recommend that you begin new projects with Lumen. Instead, we recommend always beginning new projects with [Laravel](https://laravel.com).

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 使い方と設計

### GET /api/posts/
すべての投稿を取得  
URL: `http://localhost:8000/api/posts`

### POST /api/posts
新しい投稿を作成  
URL: `http://localhost:8000/api/posts`

**Body (JSON)**
```json
{
  "title": "新しい投稿",
  "content": "これは新しい投稿の内容です。"
}
```
### GET /api/posts/{id}
指定したIDの投稿を取得  
URL: `http://localhost:8000/api/posts/1`

### PUT /api/posts/{id}
指定したIDの投稿を更新  
URL: `http://localhost:8000/api/posts/1`

**Body (JSON)**
```json
{
  "title": "更新された投稿",
  "content": "これは更新された投稿の内容です。"
}
```

### DELETE /api/posts/{id}
指定したIDの投稿を削除する  
URL: `http://localhost:8000/api/posts/1`

## 投稿データのテーブル設計

投稿データを管理するためのテーブル設計です。シンプルな投稿テーブルを設計しました。

### テーブル名
`posts`

### カラム
- `id`: 自動インクリメントID（主キー）
- `title`: 投稿のタイトル
- `content`: 投稿の内容
- `created_at`: 投稿の作成日時（タイムスタンプ）
- `updated_at`: 投稿の更新日時（タイムスタンプ）

投稿の基本的な情報を保存し、管理するための最小構成のテーブルです。

## API エンドポイント
- **GET /api/posts**: すべての投稿を取得する
- **GET /api/posts/{id}**: 指定したIDの投稿を取得する
- **POST /api/posts**: 新しい投稿を作成する
- **PUT /api/posts/{id}**: 指定したIDの投稿を更新する
- **DELETE /api/posts/{id}**: 指定したIDの投稿を削除する
