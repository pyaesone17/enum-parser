@extends('layouts.master')

@section('content')
    <div class="col-lg-4 col-lg-offset-4" style="margin-top: 100px"> 
        {!! Form::model(auth()->user(),[ 'route' => ['profile.update', auth()->user()->id], 'class' => 'form-horizontal' , 'method' => 'PATCH']) !!}
            <h3>User CV Form</h3>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Name</label>
                    {!! Form::text('name',null,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Working Type</label>
                    {!! Form::select('working_type',$view_working_type,null,['class' => 'form-control']) 
                    !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Experience Level</label>
                    {!! Form::select('experience_level',$view_experience_level,null,['class' => 'form-control']) 
                    !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Employer Status</label>
                    {!! Form::select('status', $view_status ,null,['class' => 'form-control']) 
                    !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <a href="{{ url('object/show') }}">View Profile</a>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
