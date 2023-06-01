<h3>{{ count($books) }} authors</h3>

<table border="1" style="border-collapse: collapse">
    <caption>Authors list</caption>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col" colspan="2">Books</th>
    @foreach ($users as $user)
        <tr>
            <td style="text-align: right; padding: 3px 5px">{{ $user->id }}</td>
            <td style="padding:3px 5px">{{ $user->name }}</td>

            <td style="padding:3px 5px">{{ $user->books }}</td>
            <td style="padding:3px 5px">Name{{ $user->user_id }}</td>
        </tr>
    @endforeach
</table>
