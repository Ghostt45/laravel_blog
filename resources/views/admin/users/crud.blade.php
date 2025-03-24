@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h1 style="text-align: center; margin: 30px 0px; margin-left: 250px">Users</h1>
        <div class="col-sm-12" style="margin-left: 83px">
            <a class="mr-2 btn btn-success" style="float: right; margin-bottom: 20px" href="{{ route('admin.users.create') }}">Add User</a>
        </div>

        <table class="table table-hover table-bordered table-striped" style="margin-left: 180px; width: 90%">
            <tr>
                <th>id</th>
                <th>role</th>
                <th>name</th>
                <th>email</th>
                <th>created_at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->role->role_name }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td><a class="btn btn-primary" href="{{ route('admin.users.edit', $user->id) }}"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection