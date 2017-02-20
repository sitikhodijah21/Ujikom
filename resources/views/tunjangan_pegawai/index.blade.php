@extends('layouts/app')
@section('content')
<center><h1>Data tunjangan pegawai</h1></center>
<hr>
<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">

<a href="{{url('/tunjangan_pegawai/create')}}"class="btn btn-success">Tambah Data</a>

	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>kode tunjangan id </center></th>
		<th><center>pegawai id </center></th>
		
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($tunjangan_pegawai as $tunjangan_pegawais)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$tunjangan_pegawais->tunjanganModel->kode_tunjangan_id}}</td>
			<td>{{$tunjangan_pegawais->pegawaiModel->pegawai_id}}</td>
			
		<td><a href="{{route('tunjangan_pegawai.edit',$tunjangan_pegawais->id)}}" class="btn btn-warning">Update</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan_pegawai.destroy',$tunjangan_pegawais->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection