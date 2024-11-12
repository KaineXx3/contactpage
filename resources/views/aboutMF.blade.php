@extends('layouts.master')

@section('content')
<style>
    /* General Styling */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f1eddf;
        margin: 0;
        padding: 0;
        color: #333;
    }

    .container {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Header Section */
    .profile-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 50px 170px;
        background-color: #f8f8f8;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
        margin-bottom: 50px;
    }

    .profile-header h2 {
        font-size: 36px;
        font-weight: 700;
        color: #155437;
        margin: 0;
    }

    .profile-header p {
        font-size: 18px;
        color: #777;
        max-width: 600px;
    }

    .profile-header img {
        width: 250px;
        height: 375px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* About Section */
    .about-section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }

    .about-section h3 {
        font-size: 32px;
        font-weight: 600;
        color: #155437;
        margin-bottom: 30px;
    }

    .about-text {
        font-size: 16px;
        color: #555;
        line-height: 1.7;
        text-align: center;
        max-width: 800px;
        margin-bottom: 50px;
    }

    /* Hobbies Section */
    .hobbies-section {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .hobby-card {
        width: 300px;
        margin: 20px;
        background-color: #f8f8f8;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 20px;
        transition: transform 0.3s ease-in-out;
    }

    .hobby-card:hover {
        transform: scale(1.05);
    }

    .hobby-card h5 {
        font-size: 24px;
        color: #155437;
        margin-bottom: 15px;
    }

    .hobby-card p {
        font-size: 14px;
        color: #555;
        line-height: 1.6;
    }
    .icon {
        font-size: 2.5rem;
        color: #7b1fa2;
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }
    .icon:hover {
        color: #ab47bc;
    }

    /* Professional Certifications Section */
    .certifications-section {
        background-color: #f8f8f8;
        padding: 40px;
        border-radius: 20px;
        margin: 20px auto;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
    }

    .certifications-section h3 {
        text-align: center;
        font-size: 2.5em;
        margin-bottom: 10px;
        color: #155437;
        font-weight: bold;
    }

    .card {
        border-radius: 15px;
        width: 300px;
        margin: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        margin-bottom: 20px; /* Adds space between rows of cards */
    }

    .card:hover {
        transform: scale(1.05); /* Slightly scale up the card on hover */
    }

    .card-body {
        padding: 15px; /* Adjust padding inside cards */
    }

    .card-title {
        font-size: 1.5em;
        font-weight: bold;
        color: #155437;
        margin-bottom: 15px;
    }

    .progress {
        height: 20px; /* Slightly taller progress bar */
        border-radius: 5px;
    }

    .progress-bar {
        background-color: #f1c40f; /* Golden color */
        border-radius: 5px;
        color: #b0632f;
        font-weight: bold;
    }

    .row-cols-1 {
        display: flex;
        flex-wrap: wrap;
        gap: 20px; /* Ensure space between cards */
    }

    .row-cols-md-2 {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 cards per row */
        gap: 20px; /* Space between cards in the row */
    }

    .g-4 {
        gap: 20px; /* Ensure space between grid items */
    }

    /* Media Query for smaller devices */
    @media (max-width: 768px) {
        .certifications-section h3 {
            font-size: 2em;
        }

        .row-cols-md-2 {
            grid-template-columns: repeat(2, 1fr); /* 2 cards per row on small screens */
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.2em;
        }

        .progress-bar {
            height: 8px; /* Slightly smaller progress bar on smaller screens */
        }
    }

    .contact-section h3 {
        font-size: 32px;
        font-weight: 600;
        color: #155437;
        margin-bottom: 30px;
        text-align: center;
        margin-top: 30px;
    }

    .contact-icons {
        display: flex;
        justify-content: center;
        gap: 25px;
        margin-top: 20px;
    }

    .contact-icons a {
        text-decoration:none;
        color: #554940;
        font-size: 1.2rem;
        transition: color 0.3s ease;
    }

    .contact-icons a:hover {
        color: #ab47bc;
    }
</style>

<div class="container">

    <!-- Profile Header Section -->
    <div class="profile-header">
        <div>
            <h2>About Ooi Ming Fang (CD21059)</h2>&nbsp
            <p>Computer Science student specializing in programming, game development, and digital content creation.</p>
            <p>Passionate about technology and digital experiences.</p>
        </div>
        <img src="{{ asset('images/ooimingfang.jpg') }}" alt="Ooi Ming Fang">
    </div>

    <!-- About Section -->
    <div class="about-section">
        <h3>Personal Profile</h3>
        <p class="about-text">
            I am a Computer Science student with a strong foundation in programming and multimedia. Proficient in C, PHP, HTML, JavaScript, and Microsoft Office, I am also skilled in game development, utilizing tools like Unity. My goal is to leverage my technical skills to help businesses succeed by creating engaging content and strategies for the digital space.
        </p>
    </div>

     <!-- Professional Certifications Section -->
    <div class="certifications-section">
        <h3>Professional Skills</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <!-- Certification Card -->
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Graphic Design Fundamentals</h5>
                        <div class="progress my-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Web Design Basics</h5>
                        <div class="progress my-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">3D Modeling and Animation</h5>
                        <div class="progress my-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Unity Game Development</h5>
                        <div class="progress my-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Unity VR Development</h5>
                        <div class="progress my-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Adobe Photoshop</h5>
                        <div class="progress my-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hobbies Section -->
    <div class="hobbies-section">
        <div class="hobby-card">
            <div class="icon">&#127957;</div>
            <h5>Outdoor Activities</h5>
            <p>I enjoy outdoor activities because they help me recharge and stay motivated. Whether it's hiking, cycling, or simply walking, nature always inspires me.</p>
        </div>
        <div class="hobby-card">
            <div class="icon">&#127925;</div>
            <h5>Listening to Music</h5>
            <p>Music is my escape. It helps me relax, explore different cultures, and find new sources of inspiration. It’s both soothing and energizing.</p>
        </div>
        <div class="hobby-card">
            <div class="icon">&#128218;</div>
            <h5>Reading Novels</h5>
            <p>Reading is a way to immerse myself in different worlds and perspectives. I enjoy how it sparks my creativity and expands my understanding of the world.</p>
        </div>
    </div>

    <div class="contact-section">
    <h3>Contact Information</h3>
    <div class="contact-icons">
        <button type="button" class="btn btn-outline-success" onclick="window.open('mailto:fang4245@gmail.com', '_blank')" title="Email">
            Email <i class="fas fa-envelope"></i>
        </button>
        <button type="button" class="btn btn-outline-success" onclick="window.open('https://linkedin.com/in/ooi-ming-fang-b0aba1299/', '_blank')" title="LinkedIn">
            LinkedIn <i class="fas fa-linkedin"></i>
        </button>
        <button type="button" class="btn btn-outline-success" onclick="window.open('http://github.com/OoiMFang', '_blank')" title="GitHub">
            GitHub <i class="fas fa-github"></i>
        </button>
    </div>
</div>

</div>

@endsection
