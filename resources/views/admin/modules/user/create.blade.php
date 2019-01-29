@extends('admin.template')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('user.module_title') }}</h1>
                    <h2 class="text-center">{{ Lang::get('admin.create_form') }}</h2><br />
                    {!! Form::open(['route'=>'user.store', 'role'=>'form','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('name', Lang::get('user.name'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', Lang::get('user.email'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', Lang::get('user.password'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {{ Form::password('password',['class'=> 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> {{ Lang::get('admin.submit_button') }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection