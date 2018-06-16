@extends('layout') 
@section('title', 'Client/New Client') 
@section('optional_js')
<script src="{{ asset('/js/clients.js') }}"></script>
@endsection

@section('content')

<div class="row">
    <h4>{{ $modify == 1 ? 'Modify Client ': 'New Client' }}</h4>
</div>

<form id="formContent" class="was-validated" action=" {{ $modify == 1 ? route('updateClient', [ 'client_id' => $client_id ] ): route('createClient') }}"
    method="post">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-2">
            <label id="lblTitle" for="title">Title</label>
            <select id="title" name="title" class="form-control">
                @foreach($titles as $title)
                <option value={{ $title }}>{{ $title}}.</option>
                @endforeach
            </select>
            <small class="text-danger">{{$errors->first('title')}}</small>
        </div>
        <div class="form-group col-md-5">
            <label id="lblName" for="name">Name</label>
            <input class="form-control" id="name" name="name" type="text" value="{{ old('name') ? old('name') : $name}}">
            <small class="text-danger">{{$errors->first('name')}}</small>
        </div>
        <div class="form-group col-md-5">
            <label id="lblLastName" for="lastName">Last Name</label>
            <input class="form-control" id="lastName" name="lastName" type="text" value="{{ old('lastName') ?  old('lastName') : $lastName}}">
            <small class="text-danger">{{$errors->first('lastName')}}</small>
        </div>
    </div>
    <div class="form-group">
        <label id="lblAddress" for="address">Address</label>
        <input class="form-control" id="address" name="address" type="text" value="{{ old('address') ? old('address') : $address }}">
        <small class="text-danger">{{$errors->first('address')}}</small>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label id="lblZipCode" for="zipCode">Zip</label>
            <input class="form-control" id="zipCode" name="zipCode" type="text" value="{{ old('zipCode') ? old('zipCode') : $zipCode }}">
            <small class="text-danger">{{$errors->first('zipCode')}}</small>
        </div>
        <div class="form-group col-md-5">
            <label id="lblCity" for="city">City</label>
            <input class="form-control" id="city" name="city" type="text" value="{{ old('city') ? old('city') : $city }}">
            <small class="text-danger">{{$errors->first('city')}}</small>
        </div>
        <div class="form-group col-md-4">
            <label id="lblState" for="state">State</label>
            <input class="form-control" id="state" name="state" type="text" value="{{ old('state') ? old('state'): $state }}">
            <small class="text-danger">{{$errors->first('state')}}</small>
        </div>
    </div>
    <div class="form-group">
        <label id="lblEmail" for="email">Email</label>
        <input class="form-control" id="email" name="email" type="text" value="{{ old('email') ? old('email'): $email }}">
        <small class="text-danger">{{$errors->first('email')}}</small>
    </div>
    <div>
        <input id="btnSave" value="SAVE" class="btn btn-success" name="submit">
    </div>
</form>
@endsection