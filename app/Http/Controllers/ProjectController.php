<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('is_completed', false)
                            ->orderBy('created_at', 'desc')
                            ->withCount(['tasks' => function ($query) {
                                $query->where('is_completed', false);
                            }])
                            ->get();

        return $projects->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required',
            'description'   => 'required',
        ]);

        $project = Project::create([
            'name'          => $validatedData['name'],
            'description'   => $validatedData['description'],
        ]);

        return response()->json('Project created!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::with(['tasks' => function ($query) {
            $query->where('is_completed', false);
        }])->find($id);

        return $project->toJson();
    }

    /**
     * Mark project as complete.
     *
     * @param Project $project
     *
     * @return \Illuminate\Http\Response
     */
    public function markAsCompleted(Project $project)
    {
        $project->is_completed = true;
        $project->update();

        return response()->json('Project updated!');
    }
}
