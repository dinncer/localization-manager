@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('project.module_title') }}</h1><br />
                    <a href="{{ route('project.create') }}" class="btn btn-success">{{ Lang::get('admin.create_form') }}</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ Lang::get('project.title') }}</th>
                                <th>{{ Lang::get('admin.edit') }}</th>
                                <th>{{ Lang::get('admin.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->title }}</td>
                                <td><a class="btn btn-primary btn-sm" href="{{ route('project.edit',$project->id_project) }}">Edit</a></td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE','route' => ['project.destroy', $project->id_project]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination"> {{ $projects->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection