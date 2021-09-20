<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{

    public function __construct()
    {   
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(5);
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project,
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project(),
        ]);
    }

    public function store(SaveProjectRequest $request)
    {

        $project = new Project($request->validated());
        $project->image = $request->file('image')->store('images');
        $project->save();

        return redirect()
            ->route('projects.index')
            ->with(session('status', 'O projecto foi criado com exito'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $validatedData = $request->validated();
        $project->update($validatedData);

        return redirect()
            ->route('projects.show', [
                'project' => $project,
            ])->with(session('status', 'O projecto foi atualizado com exito'));
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()
            ->route('projects.index')
            ->with('status', 'Projecto eliminado com exito');
    }
}
