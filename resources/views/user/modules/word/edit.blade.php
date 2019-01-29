@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('word.module_title') }}</h1>
                    <h2 class="text-center">{{ Lang::get('admin.edit_form') }}</h2><br />
                    {!! Form::model($word, ['method' => 'PATCH', 'role'=>'form','class'=>'form-horizontal', 'route' => ['word.update', $word->id_word]]) !!}
                    <div class="form-group">
                        {!! Form::label('title', Lang::get('word.title'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('vocable', Lang::get('word.vocable'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('vocable',null,['class'=>'form-control']) !!}
                        </div>
                    </div>                    
                    <div class="form-group">
                        {!! Form::label('version', Lang::get('word.version'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::text('version',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('project_id', Lang::get('word.project'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::select('project_id',$projects,null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('language_id', Lang::get('word.language'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::select('language_id',$languages,null,['class'=>'form-control']) !!}
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