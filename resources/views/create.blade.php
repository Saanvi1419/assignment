@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('crud') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="tasks" id="tasks" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop