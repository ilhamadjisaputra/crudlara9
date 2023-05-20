@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nim : {{ $students->nim }}</h5>
        <p class="card-text">Nama : {{ $students->nama }}</p>
        <p class="card-text">Prodi : {{ $students->prodi }}</p>
  </div>
      
    </hr>
  
  </div>
</div>