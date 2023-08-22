@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h1>{{$technology -> name}}</h1>
    <a  class="btn btn-secondary" href="{{route('technology.edit', $technology -> id) }}">
        EDIT
    </a>
    <p>{{$technology -> descripition}}</p>
    <ul>
        @foreach ($technology -> projects  as $project)
            <li>
                {{$project -> name}}
            </li>
        @endforeach
    </ul>
</div>
@endsection