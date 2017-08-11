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
            'do_date' => Carbon::today(),
        ]);

        return redirect('/task');
    }

    public function delete(Request $request, $id)
    {
        Task::findOrFail($id)->delete();

        return redirect('/task');
    }
}
