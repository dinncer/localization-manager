@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('user.welcome_message') }} {{ Auth::user()->name }}</h1><br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
