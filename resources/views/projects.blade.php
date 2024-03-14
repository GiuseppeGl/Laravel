@extends('layouts.layout')
@section('title', 'Homepage')

@section('content')
@if($projects)
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($projects as $key => $value)
<div class="col">
    <div class="card">
        <img src="https://www.celoxis.com/cassets/img/pmc/project-management.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$value->title}}</h5>
            <p class="card-text">Tot.Pagine{{$value->pages}}</p>
            <p class="card-text">Anno Pubblicazione: {{$value->year}}</p>
            <a type="button" class="btn btn-outline-info" href="/books?id={{$value->id}}">Info</a>
            <a type="button" class="btn btn-outline-warning" href="/books/{{$value->id}}/edit">Edit</a>
            <a type="button" class="btn btn-outline-danger" href="/books/{{$value->id}}/destroy">Delete</a>
        </div>
    </div>
</div>
@endforeach
</div>
        @endif
@endsection