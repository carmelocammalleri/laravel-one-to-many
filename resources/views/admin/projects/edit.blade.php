@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{$title}}</h1>
    <form action="{{route('admin.projects.update', $project)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
        </div>
        <div class="mb-3">
          <label for="date_creation" class="form-label">Data di creazione</label>
          <input type="date" class="form-control" id="date_creation" name="date_creation" value="{{ old('date_creation', $project->date_creation) }}">
        </div>
        <div class="mb-3">
            <label for="web_site" class="form-label">Url</label>
            <input type="url" class="form-control" id="web_site" name="web_site" value="{{ old('web_site', $project->web_site) }}">
        </div>
        <div class="mb-3">
            <label for="tecnology" class="form-label">Tecnologia</label>
            <input type="text" class="form-control" id="tecnology" name="tecnology" value="{{ old('tecnology',$project->tecnology) }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $project->type) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" value="{{ old('description', $project->description) }}"></textarea>
        </div>

        <button type="submit" class="btn btn-secondary ">Invia</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
      </form>
</div>

@endsection
