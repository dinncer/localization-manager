@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Lang::get('user.register_title') }}</div>
                <div class="panel-body">
                    {!! Form::open(['url'=>'register','role'=>'form','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('name', Lang::get('user.name'), array('class'=>'col-md-4 control-label')); !!}
                        <div class="col-md-8">
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', Lang::get('user.email'), array('class'=>'col-md-4 control-label')); !!}
                        <div class="col-md-8">
                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', Lang::get('user.password'), array('class'=>'col-md-4 control-label')); !!}
                        <div class="col-md-8">
                            {!! Form::text('password',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('password_confirmation', Lang::get('user.password_confirmation'), array('class'=>'col-md-4 control-label')); !!}
                        <div class="col-md-8">
                            {!! Form::text('password_confirmation',null,['class'=>'form-control']) !!}
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-primary">{{ Lang::get('user.register_button') }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection