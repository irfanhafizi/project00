<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Loop through your users and display each row -->
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->birthday }}</td>
                <td>{{ $user->created_at}}</td>
                <td>
                    <button class="delete-btn" ><a href="/delete/{{$user->id}}">Delete</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<br>
<a href="{{route('form.index')}}">Go to form</a>

</html>