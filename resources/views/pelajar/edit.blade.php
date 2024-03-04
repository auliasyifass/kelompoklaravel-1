@extends('layouts.admin')

@section('judul', 'Edit Data Pelajar')

@section('content')
<form action="{{ route('pelajar.update', $pelajar->id) }}" method="POST">
  @csrf
  @method('PUT')
<div class="form-group p-3">
    <label>Nomor Pelajar</label>
    <input type="text" name='no' class="form-control" value="{{ $pelajar->no }}">
           @error('no')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>NIS</label>
    <input type="text" name='nis' class="form-control" value="{{ $pelajar->nis }}">
           @error('nis')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>Nama Lengkap</label>
    <input type="text" name='nama' class="form-control" value="{{ $pelajar->nama }}">
           @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>No HP</label>
    <input type="text" name='no_hp' class="form-control" value="{{ $pelajar->no_hp }}">
           @error('no_hp')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>Alamat</label>
    <input type="text" name='alamat' class="form-control" value="{{ $pelajar->alamat }}">
           @error('alamat')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="p-3">
<button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>
@endsection
