@extends('layouts.master')

@section('content')
<style>
    /* Color Variables */
    :root {
        --primary-color: #007bff;
        --secondary-color: #2c3e50;
        --gradient-primary: linear-gradient(135deg, #e0f7fa, #ffffff);
        --gradient-secondary: linear-gradient(135deg, #f9fbe7, #ffffff);
    }

    /* General Layout and Container */
    .container {
        max-width: 1000px;
    }

    /* Header Styles */
    h2, h3 {
        font-weight: 700;
        color: var(--secondary-color);
    }

    /* Primary and Secondary Section Backgrounds */
    .gradient-bg-primary {
        background: var(--gradient-primary);
        padding: 3rem 0;
        border-radius: 8px;
        color: var(--secondary-color);
        text-align: center;
    }

    .gradient-bg-secondary {
        background: var(--gradient-secondary);
        padding: 3rem 0;
        border-radius: 8px;
    }

    /* Section Divider */
    .section-divider {
        height: 4px;
        width: 80px;
        background-color: var(--primary-color);
        margin: 1rem auto;
    }

    /* Card Styles */
    .card {
        border: none;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card-hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
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
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Progress Bar Styles */
    .progress {
        height: 8px;
        border-radius: 4px;
        overflow: hidden;
        animation: growProgress 1.5s ease-out;
    }

    .progress-bar {
        font-size: 0.85rem;
        line-height: 15px;
        text-align: center;
    }

    /* Keyframes for Progress Bar Animation */
    @keyframes growProgress {
        0% {
            width: 0;
        }
        100% {
            width: 100%;
        }
    }

    /* Advanced Typography */
    .text-muted-custom {
        color: #7f8c8d;
        font-style: italic;
    }
</style>

<div class="custom-cursor"></div>
<div class="container my-5">
    <!-- Header Section with Gradient -->
    <section class="gradient-bg-primary">
        <h2 class="my-4">About GAN WEI LIN (CA21085)</h2>
        <p class="text-muted-custom">Dedicated to advancing in technology and cybersecurity fields</p>
        <div class="section-divider"></div>
    </section>

    <!-- Profile Section -->
    <div class="row g-3 align-items-center my-5 gradient-bg-secondary p-4 rounded">
        <div class="col-auto text-center">
            <img src="{{ asset('images/ganweilin.jfif') }}" class="profile-img" alt="Profile picture of Gan Wei Lin">
        </div>

        <div class="col">
            <div class="card card-hover-effect">
                <div class="card-body">
                    <h3 class="mb-3">Personal Profile</h3>
                    <p>
                        A highly driven and technically proficient individual with a solid foundation in <strong>computer systems</strong>, <strong>networking</strong>, <strong>artificial intelligence</strong>, and <strong>programming</strong>. I bring strong expertise in <strong>system administration</strong>, <strong>network protocols</strong>, and <strong>database management</strong>, with a keen interest in applying these skills to real-world challenges. I am seeking an internship where I can leverage my knowledge and make meaningful contributions to projects in <strong>network infrastructure</strong>, <strong>cloud computing</strong>, and <strong>cybersecurity</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Hobbies Section -->
    <div class="container mb-5 p-4 rounded" style="background: var(--gradient-primary);">
        <h3 class="mb-4 text-center">Hobbies</h3>
        <div class="section-divider"></div>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <!-- Each hobby card with hover effect class -->
            <div class="col">
                <div class="card hobby-card card-hover-effect h-100 text-center p-2">
                    <div class="card-body p-3">
                        <h5 class="card-title" style="font-size: 1rem;">🏀 Playing Basketball</h5>
                        <p class="card-text" style="font-size: 0.9rem;">Enjoy staying active by playing basketball and improving skills on the court.</p>
                    </div>
                </div>
            </div>
            <!-- Other hobby cards omitted for brevity -->
            <div class="col">
                <div class="card hobby-card card-hover-effect h-100 text-center p-2">
                    <div class="card-body p-3">
                        <h5 class="card-title" style="font-size: 1rem;">
                            📚 Studying
                        </h5>
                        <p class="card-text" style="font-size: 0.9rem;">Continuously learning new technologies to stay updated with the latest trends.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card hobby-card card-hover-effect h-100 text-center p-2">
                    <div class="card-body p-3">
                        <h5 class="card-title" style="font-size: 1rem;">
                            🎶 Listening to Music
                        </h5>
                        <p class="card-text" style="font-size: 0.9rem;">I love listening to music as a way to unwind and recharge.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section with Progress Bars -->
    <div class="container mb-5 p-4 rounded" style="background: var(--gradient-secondary);">
        <h3 class="mb-4 text-center">Skills</h3>
        <div class="section-divider"></div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <!-- CCNA Skill Card with progress animation -->
            <div class="col">
                <div class="card p-3 card-hover-effect">
                    <div class="card-body">
                        <h5 class="card-title">🛡️ Enterprise Networking, Security, and Automation (CCNA)</h5>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;">Completed</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3 card-hover-effect">
                    <div class="card-body">
                        <h5 class="card-title">🔌 Switching, Routing, and Wireless Essentials (CCNA)</h5>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;">Completed</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3 card-hover-effect">
                    <div class="card-body">
                        <h5 class="card-title">🌐 Introduction to Networks (CCNA)</h5>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;">Completed</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3 card-hover-effect">
                    <div class="card-body">
                        <h5 class="card-title">🤖 Artificial Intelligence</h5>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%;">80%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3 card-hover-effect">
                    <div class="card-body">
                        <h5 class="card-title">💻 Programming Languages (Python, Java, HTML/CSS)</h5>
                        <div class="progress mt-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;">85%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
