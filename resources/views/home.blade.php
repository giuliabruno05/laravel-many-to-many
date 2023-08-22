@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h4 class="p-2 mb-2  text-white">PROJECT</h4>
    <ul>
        <li>
            <a href="{{route('project.create')}} "class="link-opacity-50">
                CREATE A PROJECT +
            </a>
        </li>
        <li>
            <a href="{{route('technology.create')}} "class="link-opacity-50">
                CREATE A TECHNOLOGY +
            </a>
        </li>
    </ul>
    <ul class="text-center ">
        @foreach ($projects as $project)
            <li>
                @auth
                
                    <a href="{{route('project.show', $project -> id)}}"class="link-opacity-50">
                        {{$project -> name}}
                    </a>
               
                @endauth
                @guest
                    {{$project -> name}}
                @endguest
            </li>
        @endforeach
    </ul>
</div>
@endsection