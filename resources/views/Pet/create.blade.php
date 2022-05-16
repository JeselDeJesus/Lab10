@extends('pets.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Pets Page</div>
  <div class="card-body">
      
      <form action="{{ url('pet') }}" method="post">
        {!! csrf_field() !!}
        <label>Pet_Name</label></br>
        <input type="text" name="pet_name" id="pet_name" class="form-control"></br>
        <label>Breed</label></br>
        <input type="text" name="breed" id="breed" class="form-control"></br>
        <label>Pet_Owner</label></br>
        <input type="text" name="pet_owner" id="pet_owner" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop