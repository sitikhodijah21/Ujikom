@extends('layouts/app')
@section('content')
<center><h1>Data jabatan</h1></center>
<hr>
<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

<a href="{{url('/jabatan/create')}}"class="btn btn-success">Tambah Data</a>

	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>kode jabatan</center></th>
		<th><center>nama jabatan</center></th>
		<th><center>besaran uang</center></th>
		
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($jabatan as $jabatans)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$jabatans->kode_jabatan}}</td>
			<td>{{$jabatans->nama_jabatan}}</td>
			<td>{{$jabatans->besaran_uang}}</td>
			
		<td><a href="{{route('jabatan.edit',$jabatans->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$jabatans->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection