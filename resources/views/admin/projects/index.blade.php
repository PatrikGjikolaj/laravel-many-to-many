@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-3">
            <div class="card p-1 my-1" style="width: 18rem;">
                <img src="{{ asset("storage/" . $project->cover_image) }}" class="card-img-top" alt="cover">
                <div class="card-body">
                    <h5 class="card-title">Titolo {{$project->title}}</h5>
                    <p class="card-text">Descrizione {{$project->content}}</p>
                    <p class="card-text">Scadenza: {{$project->deadline->format("d-m-Y")}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
