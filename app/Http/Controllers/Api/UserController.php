<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class UserController extends Controller
{
    public function index () {

    $project = project::with('type');            // Eager loading (relazioni fra le tabelle)

    $project = $project->paginate(2);                       // Paginazione ( massimo 2 per pagina)

    return response()->json([
        'success' => true,
        'code' => 200,
        // 'message' => 'Ok',
        'project' => $project
    ]);
    }
    
}
