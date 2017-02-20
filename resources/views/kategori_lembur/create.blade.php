
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">kategori lembur </div>
                <div class="panel-body">

                     {!! Form::open(['url' => 'kategori_lembur']) !!}
                    <div class="form-group">
                        {!! Form::label('kode lembur', 'kode lembur') !!}
                        {!! Form::text('kode_lembur_id',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('jabatan id ', ' jabatan id') !!}
                        {!! Form::text('jabatan_id',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('golongan id', 'golongan id') !!}
                        {!! Form::text('golongan_id',null,['class'=>'form-control','required']) !!}
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
