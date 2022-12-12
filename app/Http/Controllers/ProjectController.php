<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        
        return view('project.index', [
            'projects' => Project::all()
        ]);
    }

    public function create(){
        
        return view('project.create', [
            'clients' => Client::all()
        ]);
    }

    public function store(Request $request){

        $project = $request->validate([
            'project' => 'required',
            'end_date' => 'required|date',
            'subtask' => 'required',
            'stage_one' => 'required',
            'stage_two' => 'required',
            'stage_three' => 'required',
            'stage_four' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'client_id' => 'required',
        ]);

        Project::create($project);

        return redirect('/projects')->with('success', 'Project created!');

    }

    public function show(Project $project){

        return view('project.show', [
            'project' => $project
        ]);
    }

    public function edit(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
