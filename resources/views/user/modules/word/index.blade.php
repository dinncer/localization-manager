@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('word.module_title') }}</h1><br />
                    <a href="{{ route('word.create') }}" class="btn btn-success">{{ Lang::get('admin.create_form') }}</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ Lang::get('word.title') }}</th>
                                <th>{{ Lang::get('word.vocable') }}</th>
                                <th>{{ Lang::get('word.version') }}</th>
                                <th>{{ Lang::get('word.project') }}</th>
                                <th>{{ Lang::get('word.language') }}</th>
                                <th>{{ Lang::get('admin.edit') }}</th>
                                <th>{{ Lang::get('admin.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($words as $word)
                            <tr>
                                <td>{{ $word->title }}</td>
                                <td>{{ $word->vocable }}</td>
                                <td>{{ $word->version }}</td>
                                <td>{{ $word->project->title }}</td>
                                <td>{{ $word->language->name }}</td>
                                <td><a class="btn btn-primary btn-sm" href="{{ route('word.edit',$word->id_word) }}">Edit</a></td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE','route' => ['word.destroy', $word->id_word]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination"> {{ $words->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection