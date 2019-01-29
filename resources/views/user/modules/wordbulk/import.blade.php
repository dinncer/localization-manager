@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('wordbulk.import') }}</h1>
                    {!! Form::open(['url'=>'csv/import','role'=>'form','class'=>'form-horizontal','files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('word', Lang::get('wordbulk.file'), array('class'=>'col-md-2 control-label')); !!}
                        <div class="col-md-10">
                            {!! Form::file('word'); !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> {{ Lang::get('wordbulk.submit_button') }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection