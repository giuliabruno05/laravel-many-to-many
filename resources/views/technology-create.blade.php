@extends('layouts.app')

@section('content')
<form
    method="POST"
    action="{{ route('technology.store') }}"
>
    @csrf
    @method("POST")

    <div class="row p-5 ">
        <div class="col-6">
            <input type="text" class="form-control" placeholder="NAME" name="name">
        </div>
        <div class="col-6">
            <input type="text" class="form-control" placeholder="DESCRIPTION"  name="description">
        </div>
        @foreach ($projects as $project)
        <div class="form-check mt-3 mx-3">
            <input class="form-check-input " type="checkbox" name="projects[]" value="{{$project -> id}}" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                {{$project -> name}}
            </label>
        </div>
        @endforeach
    <div class="text-center">
        <button type="submit" class="btn btn-warning text-white">CREATE</button>
    </div>
</form>
@endsection