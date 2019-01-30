@extends('admin.template')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('admin.dashboard_title') }}</h1><br />
                    <div class="text-center">
                         {{ Lang::get('admin.total_member') }} : <span class="label label-default">{{ $userTotal }}</span>
                         {{ Lang::get('admin.total_lang') }} : <span class="label label-default">{{ $languageTotal }}</span>
                    </div><br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection