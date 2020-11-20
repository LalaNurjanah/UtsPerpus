@extends('layouts.app')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<form action="/anggota/{{ $anggota['alamat'] }}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Anggota</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="Nama Anggota" aria-describedby="emailHelp" value="{{ old('Nama Anggota') ? old('Nama Anggota') : $friend['Nama Anggota'] }}">
    @error('Nama Anggota')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') ? old('alamat') : $friend['alamat'] }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>

  <div class="form-group">
<label for="jenis_kelamin">Jenis Kelamin</label>
<select class="form-control" id="jenis_kelamin" 
                    name="jenis_kelamin">
<option value="laki-laki">Laki-laki</option>
<option value="perempuan">Perempuan</option>
</select>
</div>
<div class="form-group">
<label for="email">Alamat Email</label>
<input type="email" class="form-control" id="email" 
                    name="email" aria-describedby="emailHelp" 
                    placeholder="Enter email" value="{{ old('email') }}">
</div>
<div class="form-group">
<label for="no_telp">No. HP</label>
<input type="text" class="form-control" id="no_telp" 
                    name="no_telp" placeholder="NO. HP" 
                    value="{{ old('no_telp') }}">
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection