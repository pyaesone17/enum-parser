@extends('layouts.master')

@section('content')
    <div class="col-lg-4 col-lg-offset-4" style="margin-top: 30px"> 
        {!! Form::model(auth()->user(),['class' => 'form-horizontal' ]) !!}
            <h1><a href="{{ url('array/jobs') }}"> Find Jobs </a> </h1>
            <h4>User Detail </h4>
            <img src="{{ asset('anakin3.png') }}" style="height: 350px; width: 400px" />
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
                    @switch(auth()->user()->working_type)
                        @case('FREELANCE')
                            Freelance Developer
                            @break

                        @case('FULLTIME')
                            Fulltime Developer
                            @break

                        @case('REMOTE')
                            Remote Developer
                            @break

                        @default
                            Default case...
                    @endswitch
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Experience Level</label>
                    @switch(auth()->user()->experience_level)
                        @case('INTERN')
                            Intern Level
                            @break

                        @case('SENIOR')
                            Senior Level
                            @break

                        @case('JUNIOR')
                            Junior Level
                            @break

                        @case('MID')
                            Mid Level
                            @break

                        @default
                            Default case...
                    @endswitch
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label>Employer Status</label>
                    @switch(auth()->user()->status)
                        @case('AVAILABLE')
                            Actively looking for a new job
                            @break

                        @case('NOT_AVAILABLE')
                            Not interested to find jobs
                            @break

                        @case('NEW_JOB')
                            Currently have a job but looking for new job
                            @break

                        @default
                            Default case...
                    @endswitch
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <a href="{{ url('array/form') }}">update CV</a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
