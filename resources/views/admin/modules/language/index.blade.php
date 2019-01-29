@extends('admin.template')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('language.module_title') }}</h1><br />
                    <a href="{{ route('language.create') }}" class="btn btn-success">{{ Lang::get('admin.create_form') }}</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ Lang::get('language.name') }}</th>
                                <th>{{ Lang::get('language.language_code') }}</th>
                                <th>{{ Lang::get('language.country_code') }}</th>
                                <th>{{ Lang::get('admin.edit') }}</th>
                                <th>{{ Lang::get('admin.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($languages as $language)
                            <tr>
                                <td>{{ $language->name }}</td>
                                <td>{{ $language->language_code }}</td>
                                <td>{{ $language->country_code }}</td>
                                <td><a class="btn btn-primary btn-sm" href="{{ route('language.edit',$language->id_language) }}">Edit</a></td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE','route' => ['language.destroy', $language->id_language]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination"> {{ $languages->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection