@extends('pets.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Pets Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Pet Name : {{ $pets->pet_name }}</h5>
        <p class="card-text">Breed : {{ $pets->breed }}</p>
        <p class="card-text">Pet Owner : {{ $pets->pet_owner }}</p>
        <p class="card-text">Address : {{ $pets->address }}</p>
  </div>
       
    </hr>
  
  </div>
</div>