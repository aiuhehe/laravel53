<?php

namespace App\Policies;

use App\Task;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
// ここ追加
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
//    public function before($user, $ability)
//    {
////        if ($user->isSuperAdmin()) {
////            return true;
////        }
//    }

    public function create(User $user)
    {
        return !empty($user->id);
    }

    public function edit(User $user, Task $task)
    {
        // 登録したユーザーなら変更ページを表示できる
        return $user->id === $task->user_id;
    }

    public function update(User $user, Task $task)
    {
        dd($user);
        // 登録したユーザーのみ更新できる
        return $user->id === $task->user_id;
    }

    public function delete(User $user, Task $task)
    {
        /**
         * 認可のためのメソッド
         * 第1引数：ポリシーメソッド
         * 第2引数：対象のモデル
         */
//        $this->authorize('delete', $task);
        // 登録したユーザーのみ削除できる
        return $user->id === $task->user_id;
    }
}
