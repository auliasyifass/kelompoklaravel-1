@extends('layouts.admin')

@section('judul')
Data Pelajar
@endsection
<!-- Page Heading -->

@section('tabel')

<div class="p-3">
<a href="/tambahpelajar"class="btn btn-primary my-3 ">Tambah Data Pelajar</a>
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th scope="co1">No</th>
          <th scope="co1">Nis</th>
          <th scope="co1">Nama Lengkap</th>
          <th scope="co1">No Hp</th>
          <th scope="co1">Alamat</th>
        </tr>
        </thead>
        <tbody>
        
        </tbody>
        </table>
</div>
@endsection

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>