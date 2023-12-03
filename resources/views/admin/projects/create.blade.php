@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{$title}}</h1>

    {{-- errori visuale --}}
    @if($errors->any())
        <div class="alert alert-danger" role="alert" >
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
   {{-- /errori visuale --}}

    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf

        {{-- name form --}}
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
          @error('name')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3">
          <label for="date_creation" class="form-label">Data di creazione</label>
          <input type="date" class="form-control" id="date_creation" name="date_creation">
        </div>
        <div class="mb-3">
            <label for="web_site" class="form-label">Url</label>
            <input type="url" class="form-control" id="web_site" name="web_site">
        </div>
        <div class="mb-3">
            <label for="tecnology" class="form-label">Tecnologia</label>
            <input type="text" class="form-control" id="tecnology" name="tecnology">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-secondary ">Invia</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
      </form>
</div>

@endsection
