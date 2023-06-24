@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $members->name }}</h5>
        <p class="card-text">Address : {{ $members->email }}</p>
        <p class="card-text">Mobile : {{ $members->role }}</p>
  </div>
       
    </hr>
  
  </div>
</div>