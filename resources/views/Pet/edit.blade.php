@extends('pets.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Pet Page</div>
  <div class="card-body">
      
      <form action="{{ url('pet/' .$pets->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$pets->id}}" id="id" />
        <label>Pet_Name</label></br>
        <input type="text" name="pet_name" id="pet_name" value="{{$pets->title}}" class="form-control"></br>
        <label>Breed</label></br>
        <input type="text" name="breed" id="breed" value="{{$pets->name}}" class="form-control"></br>
        <label>Pet_Owner</label></br>
        <input type="text" name="pet_owner" id="pet_owner" value="{{$pets->pet_desk}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$pets->year}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop