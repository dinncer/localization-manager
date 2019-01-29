@extends('admin.template')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('language.module_title') }}</h1>
                    <h2 class="text-center">{{ Lang::get('admin.create_form') }}</h2><br />
                    {!! Form::open(['route'=>'language.store', 'role'=>'form','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('name', Lang::get('language.name'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('language_code', Lang::get('language.language_code'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('language_code',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('country_code', Lang::get('language.country_code'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('country_code',null,['class'=>'form-control']) !!}
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