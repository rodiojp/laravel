@extends('layout') @section('title', 'Client/Index') @section('content')
<div class="row">
    <h4>Clients</h4>
</div>
<div class="row">
    <div class="col-md-2 mt-3">
        <a class="btn btn-success" href="{{ route('newClient') }}">ADD NEW CLIENT</a>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->title }} {{ $client->name }}</td>
                <td>{{ $client->email }} </td>
                <td>
                    <a class="btn" href="{{ route('showClient', ['client_id' => $client->id]) }}">EDIT</a>
                    <a class="btn btn-warning" href="{{ route('checkRooms', ['client_id' => $client->id]) }}">BOOK A ROOM</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
</div>
@endsection