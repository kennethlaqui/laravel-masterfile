<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    @extends('layout')
  </head>
  <body>

    <h1>Projects</h1>

    <ul>

      @foreach ($projects as $project)

      <li>

        <a href="/projects/{{ $project->id }}">

          {{ $project->title }}

        </a>

      </li>

      @endforeach

    </ul>



  </body>
</html>
