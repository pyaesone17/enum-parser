@extends('layouts.master')

@section('content')
    <div class="col-lg-4 col-lg-offset-4" style="margin-top: 30px"> 
        {!! Form::model(auth()->user(),['class' => 'form-horizontal' ]) !!}
            <h1><a href="{{ url('object/jobs') }}"> Find Jobs </a> </h1>
            <h4>User Detail </h4>
            <img src="{{ asset('darthvader.jpg') }}"/>
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
                    {{ $parsedUser->working_type }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Experience Level</label>
                    {{ $parsedUser->experience_level }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Employer Status</label>
                    {{ $parsedUser->status }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Identity Type</label>
                    {{ $parsedUser->identity->type }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <a href="{{ url('object/form') }}">update CV</a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
