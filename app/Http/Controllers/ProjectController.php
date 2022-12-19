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
            'start_date' => 'required|date',
            'end_date' => 'required|date',
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

    public function edit(Project $project){
        
        return view('project.edit', [
            'project' => $project,
            'clients' => Client::all()
        ]);
    }

    public function update(Request $request, Project $project){
        
        $formFields = $request->validate([
            'project' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'client_id' => 'required',
        ]);

       $project->update($formFields);

        return redirect('/projects')->with('success', 'Project updated!');
    }

    public function destroy(Project $project){
        
        Project::where('id', $project->id)->delete();

        return redirect('/projects')->with('success', 'Project deleted!');
    }
}
