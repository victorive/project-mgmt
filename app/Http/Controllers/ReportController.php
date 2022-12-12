<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\Resource;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        
        return view('report.index', [
            'clients' => count(Client::all()),
            'projects' => count(Project::all()),
            'tasks' => count(Task::all()),
            'resources' => count(Resource::all()),
        ]);
    }
}
