<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{

    // - index.blade.html
    public function index()
    {
      // [path/to/folder/template/projects/index.blade.php]

      $projects = Project::all();

      return view('projects.index', compact('projects'));

    }

    // - show
    // - passing argument
    // public function show($id)
    // {
    //
    //   // - if id not foud use OrFail after Find
    //   $project = Project::FindOrFail($id);
    //
    //   return view('projects.show', compact('project'));
    //
    // }

    public function show(Project $project)
    {
      return view('projects.show', compact('project'));
    }

    // - create.blade.html
    public function create()
    {

      return view('projects.create');

    }

    // - store\save
    // public function store()
    // {
    //
    //   $project = new Project(); // database
    //
    //   $project->title = request('title'); // data field
    //   $project->description = request('description'); // data field
    //
    //   $project->save(); // data save
    //
    //   return redirect('/projects');
    //
    // }

    public function store()
    {

      Project::create(
        request()->validate([

          'title' => ['required', 'min:3', 'max:255'],
          'description' => ['required', 'min:3', 'max:255']

      ])

    );

      return redirect('/projects');

      // Project::create(request([
      //   'title', 'description'
      // ]));

    }


    // - edit
    // - passing argument
    // public function edit($id)
    // {
    //
    //   // $project = Project::find($id);
    //
    //   // - if id not foud use OrFail after Find
    //   $project = Project::FindOrFail($id);
    //
    //   return view('projects.edit', compact('project'));
    //
    // }

    public function edit(Project $project)
    {

      return view('projects.edit', compact('project'));

    }


    // - update
    // - passing argument
    // public function update($id)
    // {
    //
    //   // dd(request()->all());
    //
    //   // - if id not foud use OrFail after Find
    //   $project = Project::FindOrFail($id);
    //
    //   $project->title = request('title');
    //   $project->description = request('description');
    //
    //   $project->save();
    //
    //   return redirect('/projects');
    //
    // }

    public function update(Project $project)
    {

      $project->update(request(['title','description']));

      return redirect('/projects');

    }

    // - delete
    // - passing argument
    // public function destroy($id)
    // {
    //
    //   // - if id not foud use OrFail after Find
    //   Project::FindOrFail($id)->delete();
    //
    //   return redirect('/projects');
    //
    // }

    public function destroy(Project $project)
    {

      // - if id not foud use OrFail after Find
      $project->delete();

      return redirect('/projects');

    }

}
