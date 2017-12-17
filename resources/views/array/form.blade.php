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
                    {!! Form::select('working_type',['FREELANCE' => 'Freelance Developer', 'FULLTIME' => 'Fulltime Developer', 'REMOTE' => 'Remote Developer'],null,['class' => 'form-control']) 
                    !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Experience Level</label>
                    {!! Form::select('experience_level',['INTERN' => 'Intern Level', 'SENIOR' => 'Senior Level', 'JUNIOR' => 'Junior Level', 'MID' => 'Mid Level'],null,['class' => 'form-control']) 
                    !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Employer Status</label>
                    {!! Form::select('status',['AVAILABLE' => 'Actively looking for a new job', 'NOT_AVAILABLE' => 'Not interested to find jobs', 'NEW_JOB' => 'Currently have a job but looking for new job'],null,['class' => 'form-control']) 
                    !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <a href="{{ url('array/show') }}">View Profile</a>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <br/>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
