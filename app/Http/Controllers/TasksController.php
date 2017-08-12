<?php

namespace App\Http\Controllers;

use App\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('tasks.add', [
            'tasks' => $tasks
        ]);
    }

    public function add(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'content' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/task')
                ->withInput()
                ->withErrors($validator);
        }

        // Create The Task...
        Task::create([
            'content' => $request['content'],
            'user_id' => \Auth::user()->id,
        ]);

        return redirect('/task');
    }

    public function edit(Request $request, Task $task)
    {

    }

    public function update(Request $request, Task $task)
    {
        // 一致しない場合This action is unauthorized.エラーがでる
        $this->authorize($task);
//        abort_unless(\Gate::allows('update', $task), 403);
        $task->update(request()->input());
        return redirect('/task');
    }

    public function delete(Request $request, Task $task)
    {
//        if (\Gate::denies('update', $task)) {
//            return redirect('/post')->with('message', '編集できるのは投稿者と管理者のみです。');
//        }
        // 一致しない場合This action is unauthorized.エラーがでる
        $this->authorize($task);
        $task->delete();
        return redirect('/task');
    }
}
