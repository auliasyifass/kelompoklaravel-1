@extends('layouts.admin')

@section('judul', 'Tambah Profil Pelanggan')

@section('content')
<form action="pelajar.store" method="POST">
  @csrf
<div class="form-group p-3">
    <label>Nama Lengkap</label>
    <input type="text" name='nama' class="form-control" placeholder="Masukan Nama Lengkap">
           @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>Nis</label>
    <input type="text" name='nis' class="form-control" placeholder="Masukan Nis">
           @error('nis')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>No Handpone</label>
    <input type="text" name='nohp' class="form-control" placeholder="Masukan No Handpone">
           @error('nohp')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="form-group p-3">
    <label>Alamat</label>
    <input type="text" name='alamat' class="form-control" placeholder="Masukan Alamat">
           @error('alamat')
              <div class="alert alert-danger">{{ $message }}</div>
           @enderror
</div>
<div class="p-3">
<button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>
@endsection