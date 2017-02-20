@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">golongan </div>
                <div class="panel-body">

                     {!! Form::open(['url' => 'golongan']) !!}
                    <div class="form-group">
                        {!! Form::label('kode golongan', 'kode golongan') !!}
                        {!! Form::text('kode_golongan',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Nama golongan', 'Nama golongan') !!}
                        {!! Form::text('nama_golongan',null,['class'=>'form-control','required']) !!}
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
