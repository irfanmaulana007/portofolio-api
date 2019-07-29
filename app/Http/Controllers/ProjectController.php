<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{
    public function getProject(){
		$project = Project::get();
		return response()->json($project);
	}
}
