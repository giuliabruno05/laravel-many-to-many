@extends('layouts.app')

@section('content')
<h2 class="text-center mb-1 mt-4">CREATE A PROJECT</h2>
<form
    method="POST"
    action="{{ route('project.store') }}" 
>
    @csrf
    @method("POST")

    <div class="row p-5">
        <div class="col">
        <input type="text" class="form-control" placeholder="NAME" name="name">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="DESCRIPTION"  name="description">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="IMAGE"  name="image">
        </div>
        <div class="col">
            <input type="date" class="form-control" placeholder="START DATE"  name="start_date"> 
        </div>
        <div class="col">
            <input type="date" class="form-control" placeholder="END DATE"  name="end_date">
        </div>
    </div>
    <select class="form-select w-25 m-auto mb-3" name="type_id">
        @foreach ($types as $type)
            <option value="{{$type -> id}}">{{$type -> kind}}</option>
        @endforeach
    </select>
    <select class="form-select w-25 m-auto mb-3" name="type_id">
        @foreach ($technologies as $technology)
            <option value="{{$technology -> id}}">{{$technology -> name}}</option>
        @endforeach
    </select>

    <div class="text-center">
        <button type="submit" class="btn btn-warning text-white">CREATE</button>
    </div>
</form>
@endsection 