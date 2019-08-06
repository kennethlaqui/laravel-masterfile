@extends('layout')

    <h1>Create a New Project</h1>

@section('content')

  <form method="POST" action="/projects">

    @csrf

    <div class="field">

      <label class="label" for="title">Project Title</label>

      <div class="control">

          <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}" required>

      </div>


    </div>

    <div class="field">

      <label class="label" for="description">Project Description</label>

      <div class="control">

          <input type="text" class="input {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" value="{{ old('description') }}" required>

      </div>


    </div>

    <div class="field">

      <button type="submit">Create Project</button>

    </div>

    @include('errors.errors')

  </form>



@endsection


  </body>
</html>
