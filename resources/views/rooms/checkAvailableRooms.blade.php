@extends('layout') 
@section('title', 'Clients/Booking') 
@section('optional_js')
<script src="{{ asset('/js/reservations.js') }}"></script>
@endsection
 
@section('content')

<form class="was-validated" action="" method="post">
        {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-4">
            <label id="lblBookingFor" for="bookinFor">Bookin For:</label>
            <input class="form-control" id="bookinFor" name="bookinFor" value="{{$client->title}} {{$client->name}} {{$client->last_name}}"
                type="text" readonly/>
        </div>
        <div class="form-group col-md-4">
            <label id="lblDateFrom" for="dateFrom">Date From</label>
            <input class="form-control datepicker" id="dateFrom" name="dateFrom" value="{{ $dateFrom }}" type="text" />
            <small class="text-danger">{{$errors->first('dateFrom')}}</small>
        </div>
        <div class="form-group col-md-4">
            <label id="lblDateTo" for="dateTo">Date To</label>
            <input class="form-control datepicker" id="dateTo" name="dateTo" value="{{ $dateTo }}" type="text" />
            <small class="text-danger">{{$errors->first('dateTo')}}</small>
        </div>
    </div>
    <div>
        <input value="SEARCH" class="btn btn-success" type="submit">
    </div>
</form>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">Room</th>
            <th scope="col">Availability</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @unless( empty( $dateFrom ) || empty( $dateTo ) ) @foreach( $rooms as $room )
        <tr>
            <td>{{$room->name}}</td>
            <td>
                <div class="text-success">
                    Available
                </div>
            </td>
            <td>
                <a class="btn btn-warning" href="{{
                    route('book_room',
                      ['client_id' => $client->id,
                        'room_id' => $room->id,
                        'date_in' => $dateFrom,
                        'date_out' => $dateTo
                      ]
                    )
                  }}">BOOK NOW</a>
            </td>
        </tr>
        @endforeach @endunless
    </tbody>
</table>
@endsection