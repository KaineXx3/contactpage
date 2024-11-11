@extends('layouts.master')

@section('content')
<style>
    /* Card and Container Styles */
    .card {
        margin: 0;
    }

    .card-text{
        text-align: justify;
    }


    .hobby-card {
        transition: transform 0.2s;
    }

    .hobby-card:hover {
        transform: translateY(-5px);
    }

    #th{
        text-align: center;
        vertical-align: middle;
    }
    #td{
        vertical-align: middle;
    }
</style>

<div class="container">
    <h2 class="text-center my-3">About Tan Pei Yee (CD21073)</h2>

    <div class="row g-0">
        <!-- First Column with Image -->
        <div class="col-auto">
            <img src="{{ asset('images/jimmy.jfif') }}" class="rounded float-right" alt="...">
        </div>

        <!-- Second Column with Card -->
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h3>Personal Profile</h3>
                    <p class="mt-2" style="text-align: justify;">
                    I’m a Computer Science student skilled in game development using Unity and proficient in C# programming. Passionate about creating immersive, engaging games and continuously learning new technologies and techniques in game development.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Hobbies Section -->
    <div class="container py-3">
        <h3 class="mb-4">Hobbies</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card hobby-card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Programming</h5>
                        <p class="card-text">Enjoy coding and developing applications especially android applications.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card hobby-card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Reading</h5>
                        <p class="card-text" >Reading some book to release stress.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card hobby-card h-100" >
                    <div class="card-body text-center" >
                        <h5 class="card-title">Listening Music</h5>
                        <p class="card-text">Love to listen piano music.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <h3 class="mb-3">Skills</h3>
        <!-- Skills table remains the same -->
        <table class="table table-sm table-hover table-bordered text-center">
        <thead class="table-light">
      <tr>
        <th scope="col"  width="5%">No.</th>
        <th scope="col"  width="50%">Professional Certificate</th>
        <th scope="col"  width="25%">Certified by</th>
        <th scope="col"  width="20%">Issue Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td >1</td>
        <td >Enterprise Networking, Security and Automation</td>
        <td >CCNA</td>
        <td >Aug 2023</td>
      </tr>

      <tr>
        <td >2</td>
        <td >Switching, Routing and Wireless Essentials</td>
        <td >CCNA</td>
        <td >Feb 2023</td>
      </tr>

      <tr>
        <td >3</td>
        <td >Introduction to Networks</td>
        <td >CCNA</td>
        <td >Mar 2022</td>
      </tr>

      <tr>
        <td >5</td>
        <td >Detect Manufacturing Defects using Visual Inspection AI</td>
        <td >Google</td>
        <td >May 2024</td>
      </tr>

      <tr>
        <td >6</td>
        <td >Manage Kubernetes in Google Cloud</td>
        <td >Google</td>
        <td >May 2024</td>
      </tr>

      <tr>
        <td >7</td>
        <td >Monitor and Manage Google Cloud Resources</td>
        <td >Google</td>
        <td >May 2024</td>
      </tr>

      <tr>
        <td >8</td>
        <td >Professional Blockchain Technology & Cyber Physical System</td>
        <td >MIFA</td>
        <td >Jul 2024</td>
      </tr>
    </tbody>        </table>
    </div>
</div>
@endsection