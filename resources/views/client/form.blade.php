@extends('layout') @section('title', 'Client/New Client') @section('content')
<div class="row">
    <h4>{{ $modify == 1 ? 'Modify Client ': 'New Client' }}</h4>
</div>

<form action=" {{ $modify == 1 ? route('updateClient', [ 'client_id' => 1 ] ): route('createClient') }}" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label id="lblTitle" for="title">Title</label>
            <select class="form-control" id="title" name="title">
                @foreach($titles as $title)
                <option value={{ $title }}>{{ $title}}.</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-5">
            <label id="lblName" for="name">Name</label>
            <input class="form-control" id="name" name="name" type="text">
        </div>
        <div class="form-group col-md-5">
            <label id="lblLastName" for="lastName">Last Name</label>
            <input class="form-control" id="lastName" name="lastName" type="text">
        </div>
    </div>
    <div class="form-group">
        <label id="lblAddress" for="address">Address</label>
        <input class="form-control" name="address" type="text">
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label id="lblZipCode" for="zipCode">Zip</label>
            <input class="form-control" id="zipCode" name="zipCode" type="text">
        </div>
        <div class="form-group col-md-5">
            <label id="lblCity" for="city">City</label>
            <input class="form-control" id="city" name="city" type="text">
        </div>
        <div class="form-group col-md-4">
            <label id="lblState" for="state">State</label>
            <input class="form-control" id="state" name="state" type="text">
        </div>
    </div>
    <div class="form-group">
        <label id="lblEmail" for="email">Email</label>
        <input class="form-control" id="email" name="email" type="text">
    </div>
    <div>
        <input value="SAVE" class="btn btn-success" type="submit">
    </div>
</form>

@endsection