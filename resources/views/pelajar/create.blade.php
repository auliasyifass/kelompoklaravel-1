@extends('layouts.admin')

@section('judul', 'Tambah Data Pelajar')

@section('content')
<form action="{{ route('pelajar.store') }}" method="POST">
  @csrf
<div class="form-group p-3">
    <label>Nomor Pelajar</label>
    <input type="text" name='no' class="form-control" placeholder="Masukkan Nomor Pelajar">
           @error('no')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>NIS</label>
    <input type="text" name='nis' class="form-control" placeholder="Masukkan NIS">
           @error('nis')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>Nama Lengkap</label>
    <input type="text" name='nama' class="form-control" placeholder="Masukkan Nama Lengkap">
           @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>No HP</label>
    <input type="text" name='no_hp' class="form-control" placeholder="Masukkan No HP">
           @error('no_hp')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>Alamat</label>
    <input type="text" name='alamat' class="form-control" placeholder="Masukkan Alamat">
           @error('alamat')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="p-3">
<button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>
@endsection
