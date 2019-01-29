@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('project.module_title') }}</h1>
                    <h2 class="text-center">{{ Lang::get('admin.create_form') }}</h2><br />
                    {!! Form::open(['route'=>'project.store', 'role'=>'form','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('title', Lang::get('project.title'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
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