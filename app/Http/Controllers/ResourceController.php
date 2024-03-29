<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Task;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index(){
        
        return view('resource.index', [
            'resources' => Resource::all()
        ]);
    }

    public function create(){
        
        return view('resource.create');
    }

    public function store(Request $request){

        $resource = $request->validate([
            'resource' => 'required',
        ]);

        Resource::create($resource);

        return redirect('/resources')->with('success', 'Resource created!');
    }

    public function show(Resource $resource){

        return view('resource.show', [
            'resource' => $resource
        ]);
    }

    public function edit(Resource $resource){
        
        return view('resource.edit', [
            'resource' => $resource
        ]);
    }

    public function update(Request $request, Resource $resource){
        
        $formFields = $request->validate([
            'resource' => 'required',
        ]);

        $resource->update($formFields);

        return redirect('/resources')->with('success', 'Resource updated!');
    }

    public function destroy(Resource $resource){
        
        Resource::where('id', $resource->id)->delete();

        return redirect('/resources')->with('success', 'Resource deleted!');
    }
}
