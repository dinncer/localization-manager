@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Lang::get('user.login_title') }}</div>
                <div class="panel-body">
                    {!! Form::open(['url'=>'login','role'=>'form','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('email', Lang::get('user.email'), array('class'=>'col-md-4 control-label')); !!}
                        <div class="col-md-8">
                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', Lang::get('user.password'), array('class'=>'col-md-4 control-label')); !!}
                        <div class="col-md-8">
                            {{ Form::password('password',['class'=> 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-primary">{{ Lang::get('user.sign_button') }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection