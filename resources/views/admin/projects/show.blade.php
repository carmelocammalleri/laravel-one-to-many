@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Dettaglio progetto</h1>
        <h3>{{$project->name}}</h3>
        @if ($project->type)
         <p>Tipo lavoro: <strong> {{ $project->type->name}}</strong> </p>
        @endif
        <p>{{$project->description}}</p>
        <p>Url: {{$project->web_site}}</p>
        <p>Tecnologia usata: {{$project->tecnology}}</p>
        <p>Creazione: {{$project->date_creation}}</p>
    </div>
@endsection
