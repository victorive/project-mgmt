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

    public function edit(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
