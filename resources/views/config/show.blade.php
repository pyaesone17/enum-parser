@extends('layouts.master')

@section('content')
    <div class="col-lg-4 col-lg-offset-4" style="margin-top: 30px"> 
        {!! Form::model(auth()->user(),['class' => 'form-horizontal' ]) !!}
            <h1><a href="{{ url('config/jobs') }}"> Find Jobs </a> </h1>
            <h4>User Detail </h4>
            <img src="{{ asset('anakin2.jpg') }}" style="width: 300px; height: 350px" />
            <div class="form-group">
            <br/>
                <div class="col-lg-12">
                    <label>Name</label>
                    {{ auth()->user()->name }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Working Type</label>
                    {{ config('enum.working_type.'.auth()->user()->working_type) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Experience Level</label>
                    {{ config('enum.experience_level.'.auth()->user()->experience_level) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Employer Status</label>
                    {{ config('enum.status.'.auth()->user()->status) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <a href="{{ url('config/form') }}">update CV</a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
