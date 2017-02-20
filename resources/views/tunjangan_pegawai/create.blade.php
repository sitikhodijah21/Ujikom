@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">buat tunjangan pegawai </div>
                <div class="panel-body">

                     {!! Form::open(['url' => 'tunjangan_pegawai']) !!}
                    <div class="form-group">
                        {!! Form::label('kode tunjangan id', 'kode tunjangan id') !!}
                        {!! Form::text('kode_tunjangan_id',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('pegawai id', 'pegawai id') !!}
                        {!! Form::text('pegawai_id',null,['class'=>'form-control','required']) !!}
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
