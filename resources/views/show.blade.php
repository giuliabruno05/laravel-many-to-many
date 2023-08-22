@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
        <h5  class="p-1 text-white">{{$project -> name}}</h5>
   
    <img src="{{$project -> image}}" alt="">
    <p>{{$project -> description}}</p>
    <span class="badge rounded-pill text-bg-success">Start date: {{ $project -> start_date }}</span><br>
    <span class="badge rounded-pill text-bg-danger">Start end: {{ $project -> end_date }}</span>
    <div class="mt-1">
            <span>{{$project -> type -> kind}}</span><br>
            <span>{{$project -> type -> timing}}</span><br>
            <span>{{$project -> type -> funding}}</span><br>
            <strong><span>Technologies :</span></strong>
            
                @foreach ($project -> technologies as $technology)
                    
                    &#8226 <a href="{{route('technology.show', $technology -> id)}}">
                            {{$technology -> name }}
                            </a>
                    
                    
                @endforeach
            
    </div>
</div>
    

@endsection