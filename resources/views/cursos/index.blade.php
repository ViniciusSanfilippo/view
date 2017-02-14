@extends('layout')

@section('title','Cursos')

@section('content')
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <h1>Cursos</h1>

          <ul class="list-group">
            @foreach ($cursos as $curso)
              <li class="list-group-item"><a href="/cursos/{{ $loop->index }}">{{ $curso }}</a></li>
            @endforeach
          </ul>

        </div>
      </div>
@endsection
