@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('tool.word_copy_wizard') }}</h1>
                    {!! Form::open(['url'=>'tool/wizard', 'role'=>'form','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('title', Lang::get('tool.wizard_title'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('oldVersion', Lang::get('tool.wizard_old_version'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('oldVersion',null,['class'=>'form-control', 'placeholder'=>'0.0.1']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('newVersion', Lang::get('tool.wizard_new_version'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('newVersion',null,['class'=>'form-control', 'placeholder'=>'0.0.2']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('projectId', Lang::get('word.project'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::select('projectId',$projects,'-',['class'=>'form-control']) !!}
                        </div>
                    </div>                   
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> {{ Lang::get('tool.wizard_button') }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection