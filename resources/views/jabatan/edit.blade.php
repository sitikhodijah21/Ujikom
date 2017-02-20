@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">jabatan</div>
                <div class="panel-body">

                     {!! Form::open(['url' => 'jabatan.update']) !!}
                    <div class="form-group">
                        {!! Form::label('kode jabatan', 'kode jabatan') !!}
                        {!! Form::text('kode_jabatan',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Nama jabatan', 'Nama jabatan') !!}
                        {!! Form::text('nama_jabatan',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('besaran uang', 'besaran uang') !!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('SAVE', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection