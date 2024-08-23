<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index', ['tasks' => Task::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTaskInformaiton = $request->validate([
            'title' => 'required|string|max:254',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:To Do,In Progress,Complete'
        ]);

        Task::create($validatedTaskInformaiton);

        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Task $task, Request $request)
    {
        $validatedTaskInformaiton = $request->validate([
            'title' => 'required|string|max:254',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:To Do,In Progress,Complete'
        ]);

        $task->update($validatedTaskInformaiton);

        return redirect('/tasks/' . $task->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/tasks');
    }
}
