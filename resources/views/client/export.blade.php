<table>
    <thead>
        <tr>
            <th>Room</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{ $client->title }} {{ $client->name }} {{ $client->last_name }}</td>
            <td>{{ $client->email }} </td>
        </tr>
        @endforeach
    </tbody>
</table>