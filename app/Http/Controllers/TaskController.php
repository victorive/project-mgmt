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
            'description' => 'required',
            'project_id' => 'required',
            'status' => 'required',
        ]);

        Task::create($task);

        return redirect('/tasks')->with('message', 'Task created!');
    }

    public function show(Task $task){
        
        return view('task.show', [
            'task' => $task
        ]);
    }

    public function edit(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
