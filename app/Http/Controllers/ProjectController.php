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
        //Forma segura de inserção de dados mas retorna erros qunado os campos não estão validados.
        // Project::create([
        //     'title' => request('title'),
        //     'slug' => request('slug'),
        //     'description' => request('description'),
        // ]);
        //Proteção de registo na base de dados, obrigamos a aplicação a introduzir apenas os campos expecificados, ignorando todos os outros.
        //Project::create(request()->only('title', 'slug', 'description'));
        //Forma de passar os campos já validados, uma vez que os mesmos estão a ser validados pelo método validate();
        // return $request->validated();
        // Forma não segura, porque não temos o métudo guarder ativado
        //Project::create($request->all());
        // Devemos ulizar o métudo validade para quando queremos garantir que apenas são guardadeos os campos utilizados na Class Request utilizada para as validações.
        Project::create($request->validate());

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
