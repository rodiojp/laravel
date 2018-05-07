@extends('default') 

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
@endif

<form action="{{ route('contact.submit') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea type="text" class="form-control" cols="30" rows="10" id="message" name="message" value="{{ old('message') }}">
        </textarea>
    </div>
    <button class="btn btn-primary">Send Message</button>
</form>
@stop