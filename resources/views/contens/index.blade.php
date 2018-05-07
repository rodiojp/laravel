@extends('layout') @section('title', 'Home Page') @section('content')
<div class="row">
    <h4 id="home">Landon Hotel App {{ $version }}</h4>
</div>
<div class="row">
    <div class="col-4 col-md-6 col-lg-7">
        <img src="images/attractions.jpg" class="img-fluid" alt="Landon hotel image">
    </div>
    <div class="col-8 col-md-6 col-lg-5">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something
            for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good
            conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
    </div>
</div>
@endsection