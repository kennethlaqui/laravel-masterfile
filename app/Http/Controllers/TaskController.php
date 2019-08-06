<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class TaskController extends Controller
{
    public function store(Project $project)
    {

        $task = request()->validate(['description' => 'required']);
        $project->addTask($task);

        // $project->addTask(request('description'));
        return back();

    }

    public function update(Task $task)
    {

        // $task->update([

        //     'completed' => request()->has('completed')

        // ]);

        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();

        return back();

    }
}
