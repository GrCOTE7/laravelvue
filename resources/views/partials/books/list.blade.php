<h3>{{ count($books) }} books</h3>

<table border="1" style="border-collapse: collapse">
    <caption>Books list</caption>
    <th scope="col">ID</th>
    <th scope="col">Title</th>
    <th scope="col" colspan="2">Author</th>
    @foreach ($books as $book)
        <tr>
            <td style="text-align: right; padding: 3px 5px">{{ $book->id }}</td>
            <td style="padding:3px 5px">{{ $book->title }}</td>
            <td style="padding:3px 5px">{{ $book->user_id }}</td>
            <td style="padding:3px 5px">Name{{ $book->user_id }}</td>
        </tr>
    @endforeach
</table>
