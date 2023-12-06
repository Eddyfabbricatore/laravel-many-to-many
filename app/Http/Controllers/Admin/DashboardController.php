<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Home Dashboard';
        $projects = Project::orderBy('id', 'desc')->paginate(5);
        $types = Type::orderBy('id', 'desc')->paginate(5);
        $technologies = Technology::orderBy('id', 'desc')->paginate(5);
        return view('admin.home', compact('title', 'projects', 'types', 'technologies'));
    }
}