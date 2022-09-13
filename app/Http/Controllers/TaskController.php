<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $request->validated();

        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->status_id = $request->status_id;
        $task->category_id = $request->category_id;
        $task->user_id = $request->user_id;
        $task->icon = $request->icon;
        $task->color = $request->color;
        $task->expires_at = $request->expires_at;

        $res = $task->save();

        if ($res) return response()->json(['message' => 'Task create succesfully'], 201);

        return response()->json(['message' => 'Error to create post'], 500);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        // $request->validated();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
