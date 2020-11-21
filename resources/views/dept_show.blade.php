
<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>City Name</td>
<td>Email</td>
</tr>
@foreach ($depts as $dept)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->short_name }}</td>
<td>{{ $user->s }}</td>

</tr>
@endforeach
</table>
</body>
</html>