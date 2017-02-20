@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">tunjangan</div>
                <div class="panel-body">

                     {!! Form::open(['url' => 'tunjangan.Update']) !!}
                    <div class="form-group">
                        {!! Form::label('jabatan', 'jabatan') !!}
                        {!! Form::text('jabatan_id',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('golongan', 'golongan') !!}
                        {!! Form::text('golongan_id',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('status', 'ststus') !!}
                        {!! Form::text('status',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('jumlah anak', 'jumlah anak') !!}
                        {!! Form::text('jumlah_anak',null,['class'=>'form-control','required']) !!}
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
