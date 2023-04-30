@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
      
      <form action="{{ url('crud/' .$cruds->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cruds->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="tasks" id="tasks" value="{{$cruds->tasks}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop