@extends('layouts/app')
@section('content')
<center><h1>Data jabatan</h1></center>
<hr>
<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

<a href="{{url('/kategori_lembur/create')}}"class="btn btn-success">Tambah Data</a>

	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>kode lembur</center></th>
		<th><center>jabatan </center></th>
		<th><center>golongan </center></th>
		<th><center>besaran_uang </center></th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($kategori_lembur as $kategori_lemburs)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$kategori_lemburs->kode_lembur_id}}</td>
			<td>{{$kategori_lemburs->jabatanModel->jabatan_id}}</td>
			<td>{{$kategori_lemburs->golonganModel->golongan_id}}</td>
			<td>{{$kategori_lemburs->besaran_uang}}</td>
			
		<td><a href="{{route('kategori_lembur.edit',$kategori_lemburs->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['kategori_lembur.destroy',$kategori_lemburs->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection