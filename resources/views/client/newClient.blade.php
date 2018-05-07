@extends('layout') @section('title', 'Client/New Client') @section('content')
<div class="row">
    <h4>New Client</h4>
</div>

<form action="/clients/new" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label id="lblTitle" for="form[title]">Title</label>
            <select class="form-control" id="title" name="form[title]">
                @foreach($titles as $title)
                <option value={{ $title }}>{{ $title}}.</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-5">
            <label id="lblName" for="form[name]">Name</label>
            <input class="form-control" id="name" name="form[name]" type="text">
        </div>
        <div class="form-group col-md-5">
            <label id="lblLastName" for="form[lastName]">Last Name</label>
            <input class="form-control" id="lastName" name="form[lastName]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label id="lblAddress" for="form[address]">Address</label>
        <input class="form-control" name="form[address]" type="text">
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label id="lblZipCode" for="form[zipCode]">Zip</label>
            <input class="form-control" id="zipCode" name="form[zipCode]" type="text">
        </div>
        <div class="form-group col-md-5">
            <label id="lblCity" for="form[city]">City</label>
            <input class="form-control" id="city" name="form[city]" type="text">
        </div>
        <div class="form-group col-md-4">
            <label id="lblState" for="form[state]">State</label>
            <input class="form-control" id="state" name="form[state]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label id="lblEmail" for="form[email]">Email</label>
        <input class="form-control" id="email" name="form[email]" type="text">
    </div>
    <div>
        <input value="SAVE" class="btn btn-success" type="submit">
    </div>
</form>

@endsection