<h3>{{ count($books) }} authors</h3>

<div style='display:flex; justify-content: center;'>
    <table border="1" style="border-collapse: collapse">
        <caption>Authors list</caption>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col" colspan="2">Books</th>
    @foreach ($users as $user)
        <tr>
            <td style="text-align: right; padding: 3px 5px">{{ $user->id }}</td>
            <td style="padding:3px 5px">{{ $user->name }}</td>

            <td style="padding:3px 5px; text-align: right">
                @forelse ($user->books as $book)
                    {{ $book->id }}<br>
                    @empty
                    <div style="text-align: center;">-</div>
                @endforelse
            </td>
            <td style="padding:3px 5px">
                @forelse ($user->books as $book)
                    {{ $book->title }}<br>
                @empty
                    <div style="text-align: center;"><i>No book yet</i></div>
                @endforelse
            </td>
        </tr>
        @endforeach
</table>
</div>
