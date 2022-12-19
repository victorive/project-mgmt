<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        
        return view('task.index', [
            'tasks' => Task::all()
        ]);
    }

    public function create(){
        
        return view('task.create', [
            'projects' => Project::all()
        ]);
    }

    public function store(Request $request){

        $task = $request->validate([
            'task' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'project_id' => 'required',
        ]);

        Task::create($task);

        return redirect('/tasks')->with('success', 'Task created!');
    }

    public function show(Task $task){
        
        return view('task.show', [
            'task' => $task
        ]);
    }

    public function edit(Task $task){

        return view('task.edit', [
            'task' => $task,
            'projects' => Project::all()
        ]);
    }

    public function update(Request $request, Task $task){
        
        $formFields = $request->validate([
            'task' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'project_id' => 'required',
        ]);

        $task->update($formFields);

        return redirect('/tasks')->with('success', 'Task updated!');
    }

    public function destroy(Task $task){
        
        Task::where('id', $task->id)->delete();

        return redirect('/tasks')->with('success', 'Task deleted!');
    }
}
