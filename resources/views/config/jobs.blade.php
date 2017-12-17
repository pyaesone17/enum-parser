@extends('layouts.master')

@section('content')
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 50px"> 
        {!! Form::model(auth()->user(),['class' => 'form-horizontal' ]) !!}
            <h4>Filter Form</h4>
            <div class="form-group">
                <div class="col-lg-4">
                    <label>Working Type</label>
                    {!! Form::select('working_type',config('enum.working_type'),null,['class' => 'form-control']) 
                    !!}
                </div>
                <div class="col-lg-4">
                    <label>Experience Level</label>
                    {!! Form::select('experience_level',config('enum.experience_level'),null,['class' => 'form-control']) 
                    !!}
                </div>
                <div class="col-lg-4">
                    <label>Education Level</label>
                    {!! Form::select('education_level',config('enum.education_level')],null,['class' => 'form-control']) 
                    !!}
                </div>
                <div class="col-lg-12">
                    <br/>
                    <button class="btn btn-primary pull-right">Filter</button>
                </div>
            </div>
        {!! Form::close() !!}
        <br/><br/>

        <h3>Jobs List</h3>
        <h4>1. Senior Laravel Developer</h4>
        <p><b>Experience Level</b> : Senior Level </p>
        <p><b>Working Type</b> : Fulltime Developer </p>
        <hr/>

        <h4>2. Junior Laravel Developer</h4>
        <p><b>Experience Level</b> : Junior Level </p>
        <p><b>Working Type</b> : Fulltime Developer </p>
        <hr/>

        <h4>3. React Developer</h4>
        <p><b>Experience Level</b> : Senior Level </p>
        <p><b>Working Type</b> : Freelance Developer </p>
        <hr/>

        <h4>4. Vue Developer</h4>
        <p><b>Experience Level</b> : Mid Level </p>
        <p><b>Working Type</b> : Remote Developer </p>
        <br/><br/>
    </div>
@endsection
