@extends('layouts/app')
@section('content')
<center><h1>Pegawai</h1></center>
<hr>
<table class="table table-striped table bordered table-hover">
<table class="table table-default">
<tr class="danger">
<a href="{{url('/tunjangan/create')}}"class="btn btn-success">Tambah Data</a>

	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>jabatan </center></th>
		<th><center>golongan </center></th>
		<th><center>status</center></th>
		<th>jumlah anak</th>
		<th>besaran uang</th>
		<th colspan="3">Action</th>
	</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($tunjangan as $tunjangans)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$tunjangans->jabatanModel->jabatan_id}}</td>
			<td>{{$tunjangans->golonganModel->golongan_id}}</td>
			<td>{{$tunjangans->status}}</td>
			<td>{{$tunjangans->jumlah_anak}}</td>
			<td>{{$tunjangans->besaran_uang}}</td>


		<td><a href="{{route('tunjangan.edit',$tunjangans->id)}}"class="btn btn-warning">edit</a></td>	
		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$tunjangans->id]])!!}
		
		<input type="submit" class="btn btn-danger" onclick="return confirm('anda yakin akan menghapus data?');"value="Delete"> 
		{!!Form::close()!!}
		</td>
		</tr>
		
		@endforeach

	</tbody>
</table>




@endsection