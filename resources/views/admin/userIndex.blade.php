<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Rola</th>
            <th>Crud</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role_id }}</td>
            <td>
                <a href="{{ route('editUser', ['id' => $user->id]) }}" class="btn btn-primary">Edytuj</a>
                <a href="{{ route('deleteUser', ['id' => $user->id]) }}" class="btn btn-danger" style="margin:0;">Usuń</a>
            </td>
        </tr>
         @endforeach
    </tbody>
</table>