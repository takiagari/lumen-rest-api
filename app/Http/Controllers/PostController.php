<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

/**
 * Class PostController
 * 
 * コントローラは、POSTリソースに対するCRUD操作を処理します。
 */
class PostController extends Controller
{
    /**
     * すべての投稿を取得します。
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function showAllPosts()
    {
        // すべての投稿をデータベースから取得
        $posts = Post::all();

        // 取得した投稿をJSON形式で返す
        return response()->json($posts);
    }

    /**
     * 特定のIDを持つ投稿を取得します。
     * 
     * @param int $id 投稿のID
     * @return \Illuminate\Http\JsonResponse
     */
    public function showOnePost($id)
    {
        // 指定されたIDの投稿をデータベースから取得
        $post = Post::find($id);

        // 取得した投稿をJSON形式で返す
        return response()->json($post);
    }

    /**
     * 新しい投稿を作成します。
     * 
     * @param \Illuminate\Http\Request $request HTTPリクエスト
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        // リクエストデータから新しい投稿を作成
        $post = Post::create($request->all());

        // 作成した投稿をJSON形式で返す（201 Created）
        return response()->json($post, 201);
    }

    /**
     * 指定されたIDの投稿を更新します。
     * 
     * @param int $id 投稿のID
     * @param \Illuminate\Http\Request $request HTTPリクエスト
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        // 指定されたIDの投稿をデータベースから取得
        $post = Post::findOrFail($id);

        // 取得した投稿をリクエストデータで更新
        $post->update($request->all());

        // 更新された投稿をJSON形式で返す
        return response()->json($post, 200);
    }

    /**
     * 指定されたIDの投稿を削除します。
     * 
     * @param int $id 投稿のID
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        // 指定されたIDの投稿を取得
        $post = Post::findOrFail($id);
        
        // 投稿が存在する場合、削除
        $post->delete();
        
        // 204 No Contentを返す
        return response()->json(null, 204);
    }
}
