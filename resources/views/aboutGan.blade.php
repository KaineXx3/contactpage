@extends('layouts.master')

@section('content')
<style>
    /* General Layout and Container */
    .container {
        max-width: 1000px;
    }

    /* Header Styles */
    h2, h3 {
        font-weight: 700;
        color: #2c3e50;
    }

    /* Background Image with Gradient Overlay */
    .gradient-bg-primary {
        background: linear-gradient(rgba(240, 248, 255, 0.9), rgba(255, 255, 255, 0.9)), 
                    url("{{ asset('images/ganweilin.jfif') }}") no-repeat center center;
        background-size: cover;
        padding: 3rem 0;
        border-radius: 8px;
        color: #2c3e50;
        text-align: center;
    }

    /* Secondary Section Background with Light Gradient */
    .gradient-bg-secondary {
        background: linear-gradient(rgba(242, 242, 242, 0.8), rgba(255, 255, 255, 0.8)),
                    url("{{ asset('images/ganweilin.jfif') }}") no-repeat center center;
        background-size: cover;
        padding: 3rem 0;
        border-radius: 8px;
    }
    .custom-cursor {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: rgba(0, 123, 255, 0.5); /* 半透明蓝色 */
        position: absolute;
        pointer-events: none;
        transform: translate(-50%, -50%);
        transition: transform 0.1s ease-out;
        z-index: 9999;
    }
    .custom-cursor.hover {
        width: 30px;
        height: 30px;
        background-color: rgba(0, 123, 255, 0.7); /* 加深颜色 */
        transition: width 0.2s ease, height 0.2s ease;
    }
    /* Section Divider */
    .section-divider {
        height: 4px;
        width: 80px;
        background-color: #007bff; /* Primary Color */
        margin: 1rem auto;
    }

    /* Card Styles */
    .card {
        border: none;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    /* Image Styling */
    .profile-img {
        width: 180px;
        height: auto;
        border-radius: 50%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: 4px solid #ffffff;
    }

    /* Table Styles */
    table.table {
        border-collapse: collapse;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Progress Bar Styles */
    .progress {
        height: 8px;
        border-radius: 4px;
        overflow: hidden;
    }

    .progress-bar {
        transition: width 0.6s ease;
    }

    /* Advanced Typography */
    .text-muted-custom {
        color: #7f8c8d;
        font-style: italic;
    }
</style>
<div class="custom-cursor"></div>
<div class="container my-5">
    <!-- Header Section with Gradient and Background Image -->
    <section class="gradient-bg-primary">
        <h2 class="my-4">About GAN WEI LIN (CA21085)</h2>
        <p class="text-muted-custom">Dedicated to advancing in technology and cybersecurity fields</p>
        <div class="section-divider"></div>
    </section>

    <!-- Profile Section with Background Image -->
    <div class="row g-3 align-items-center my-5 gradient-bg-secondary p-4 rounded">
        <!-- Image Column -->
        <div class="col-auto text-center">
            <img src="{{ asset('images/ganweilin.jfif') }}" class="profile-img" alt="Gan Wei Lin">
        </div>

        <!-- Personal Profile Card -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-3">Personal Profile</h3>
                    <p>
                        A highly motivated individual with a robust foundation in computer systems, networking, and cloud technologies. Driven by a passion for technology, I am seeking an internship opportunity to apply my academic knowledge and actively contribute to projects focused on network infrastructure, cloud solutions, and cybersecurity. With a strong grasp of network protocols, system administration, and cloud computing principles, I am eager to work alongside industry professionals to gain hands-on experience.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Hobbies Section with Gradient Overlay -->
    <div class="container mb-5">
        <h3 class="mb-4 text-center">Hobbies</h3>
        <div class="section-divider"></div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card hobby-card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Programming</h5>
                        <p class="card-text">Enjoy coding and developing applications, especially Android applications.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card hobby-card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Studying</h5>
                        <p class="card-text">Continuously learning new technologies to stay updated with the latest trends.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card hobby-card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Listening to Music</h5>
                        <p class="card-text">I love listening to music as a way to unwind and recharge.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section with Background Image Overlay -->
    <div class="container mb-5">
        <h3 class="mb-4 text-center">Skills</h3>
        <div class="section-divider"></div>
        <table class="table table-sm table-hover table-bordered text-center">
            <thead class="table-light">
                <tr>
                    <th scope="col" width="5%">No.</th>
                    <th scope="col" width="50%">Professional Certificate</th>
                    <th scope="col" width="25%">Certified by</th>
                    <th scope="col" width="20%">Issue Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Enterprise Networking, Security, and Automation</td>
                    <td>CCNA</td>
                    <td>Aug 2023</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Switching, Routing, and Wireless Essentials</td>
                    <td>CCNA</td>
                    <td>Feb 2023</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Introduction to Networks</td>
                    <td>CCNA</td>
                    <td>Mar 2022</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Detect Manufacturing Defects using Visual Inspection AI</td>
                    <td>Google</td>
                    <td>May 2024</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Manage Kubernetes in Google Cloud</td>
                    <td>Google</td>
                    <td>May 2024</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Monitor and Manage Google Cloud Resources</td>
                    <td>Google</td>
                    <td>May 2024</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Professional Blockchain Technology & Cyber Physical System</td>
                    <td>MIFA</td>
                    <td>Jul 2024</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
