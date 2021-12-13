<!Doctype html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>ID</td>
<td>First Name</td>
<td>Lastst Name</td>
<td>City Name</td>
<td>Email</td>
<td>Edit</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->first_name }}</td>
<td>{{ $user->last_name }}</td>
<td>{{ $user->city_name }}</td>
<td>{{ $user->email }}</td>
<td><a href = 'edit/{{ $user->id }}'>Edit</a></td>
</tr>
@endforeach
</table>
</body>
</html>