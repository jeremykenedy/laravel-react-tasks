<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(['title' => 'required']);

        $task = Task::create([
          'title'       => $validatedData['title'],
          'project_id'  => $request->project_id,
        ]);

        return $task->toJson();
    }

    /**
     * Mark task as complete.
     *
     * @param  Task  $task
     * @return \Illuminate\Http\Response
     */
    public function markAsCompleted(Task $task)
    {
        $task->is_completed = true;
        $task->update();

        return response()->json('Task updated!');
    }
}
