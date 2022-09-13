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

        // Create resource
        $task = Task::create($request->all());

        // Success message
        if($task) return response()->json([
            'message' => 'Task created succesfully', 
            'task' => $task
        ], 201);
        
        // Error message
        return response()->json([
            'message' => 'Error to create post'
        ], 500);
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
        $request->validated();

        // Update resource
        $resource = Task::find($task->id);
        if($resource) $resource->update($request->all());

        // Success message
        if($resource) return response()->json([
            'message' => 'Task updated succesfully',
            'resource' => $resource,
        ], 201);

        // Error message
        if(!$resource) return response()->json([
            'message' => 'Error to create post',
        ], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        // Delete resource
        $resource = Task::find($task->id);
        $resource->delete();

        // Success message
        if($resource) return response()->json([
            'message' => 'Task deleted succesfully',
        ], 201);
        
        // Error message
        return response()->json([
            'message' => 'Error to delete task',
        ], 500);
    }
}
