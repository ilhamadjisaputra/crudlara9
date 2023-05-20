@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="text" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nim</label></br>
        <input type="text" name="nim" id="nim" value="{{$students->nim}}" class="form-control"></br>
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$students->nama}}" class="form-control"></br>
        <label>Prodi</label></br>
        <input type="text" name="prodi" id="prodi" value="{{$students->prodi}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop