@extends('admin.template')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.module')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">{{ Lang::get('user.module_title') }}</h1><br />
                    <a href="{{ route('user.create') }}" class="btn btn-success">{{ Lang::get('admin.create_form') }}</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ Lang::get('user.name') }}</th>
                                <th>{{ Lang::get('user.email') }}</th>
                                <th>{{ Lang::get('user.created_at') }}</th>
                                <th>{{ Lang::get('admin.edit') }}</th>
                                <th>{{ Lang::get('admin.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td><a class="btn btn-primary btn-sm" href="{{ route('user.edit',$user->id) }}">Edit</a></td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination"> {{ $users->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection