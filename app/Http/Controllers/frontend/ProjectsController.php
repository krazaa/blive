<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modules\Project;

class ProjectsController extends Controller
{
    public function Show($id){
		
    $data = Project::find($id);

    return view('projects', compact('data'));
	}
}
