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
        margin-top: 5px;
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
        padding: 50px 20px;
        border-radius: 20px;
        margin-top: 50px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .certifications-section h3 {
        font-size: 32px;
        font-weight: 600;
        color: #155437;
        text-align: center;
        margin-bottom: 30px;
    }

    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        font-size: 16px;
    }

    .table th {
        background-color: #155437;
        color: white;
        font-weight: 600;
    }

    .table tbody tr:hover {
        background-color: #f0f8ff;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .profile-header {
            flex-direction: column;
            text-align: center;
            padding: 60px 20px;
        }

        .profile-header img {
            margin-top: 20px;
        }

        .hobbies-section {
            flex-direction: column;
            align-items: center;
        }

        .hobby-card {
            width: 80%;
        }

        .table {
            font-size: 14px;
        }
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

    <!-- Professional Certifications Section -->
    <div class="certifications-section">
        <h3>Professional Certifications</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Professional Certificate</th>
                    <th>Certified by</th>
                    <th>Issue Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>AI Aware Badge - AI untuk Rakyat</td>
                    <td>MyDIGITAL and Intel</td>
                    <td>Mar 2024</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>AI Appreciate Badge - AI untuk Rakyat</td>
                    <td>MyDIGITAL and Intel</td>
                    <td>Mar 2024</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>CCNA: Introduction to Networks</td>
                    <td>Cisco</td>
                    <td>Mar 2022</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Unity Junior Programmer</td>
                    <td>Unity</td>
                    <td>Nov 2024</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Unity VR Development</td>
                    <td>Unity</td>
                    <td>Nov 2024</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
