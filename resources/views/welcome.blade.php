@extends('layouts.master')
@section('content')

<h2 class="text-center my-3">Meet Our Team</h2>

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-2 justify-content-center">
        <!-- First Card -->
        <div class="col">
            <div class="card h-100" style="width: 200px;">
            <a href="{{ url('/aboutJimmy') }}">
                <div class="card-img-top">
                    <img src="{{ asset('images/jimmy.jfif') }}" alt="" style="width: 100%; height: auto;">
                </div>
            </a>
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="card-title">JIMMY TANG JING MING</h5>
                    <p class="card-text">CA21031</p>
                </div>
            </div>
        </div>
        
        <!-- Second Card -->
        <div class="col">
            <div class="card h-100" style="width: 200px;">
                <a href="{{ url('/aboutGan') }}">
                    <div class="card-img-top">
                        <img src="{{ asset('images/ganweilin.jfif') }}" alt="" style="width: 100%; height: auto;">
                    </div>
                </a>
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="card-title">GAN WEI LIN</h5>
                    <p class="card-text">CA21085</p>
                </div>
            </div>
        </div>
        
        <!-- Third Card -->
        <div class="col">
            <div class="card h-100" style="width: 200px;">
                <div class="card-img-top">
                    <img src="{{ asset('images/ooimingfang.jpg') }}" alt="" style="width: 100%; height: auto;">
                </div>
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="card-title">OOI MING FANG</h5>
                    <p class="card-text">CD21059</p>
                </div>
            </div>
        </div>
        
        <!-- Fourth Card -->
        <div class="col">
            <div class="card h-100" style="width: 200px;">
                <a href="{{ url('/aboutPeiYee') }}">
                    <div class="card-img-top">
                        <img src="{{ asset('images/tpy.jpeg') }}" alt="" style="width: 100%; height: auto;">
                    </div>
                </a>
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="card-title">TAN PEI YEE</h5>
                    <p class="card-text">CD21073</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
