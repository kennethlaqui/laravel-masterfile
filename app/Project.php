<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded  = [];

    public function tasks()
    {

        return $this->hasMany(Task::class);

    }

    public function addTask($task)
    {

       $debug = $this->tasks()->create($task);

    //   dd($debug);
       // $this->tasks()->create(compact('description'));

        // return Task::create([

        //     'project_id' => $this->id,
        //     'description' => $description

        // ]);

    }
}

