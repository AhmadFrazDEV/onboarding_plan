<!DOCTYPE html>
<html>
<head>
    <title>Users and Roles</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 20px auto; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
        form { display: inline; }
        button { background: #e74c3c; color: #fff; border: none; padding: 5px 10px; cursor: pointer; border-radius: 3px; }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Users and Their Roles</h1>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Roles</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name ?? $user->email }}</td>
                    <td>
                        @if($user->roles->count())
                            @foreach($user->roles as $role)
                                <span>{{ $role->name }}</span>@if(!$loop->last), @endif
                            @endforeach
                        @else
                            <em>No roles</em>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('users.with.roles.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
