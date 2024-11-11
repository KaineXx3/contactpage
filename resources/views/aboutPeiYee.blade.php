@extends('layouts.master')

@section('content')
<style>
    /* Base Styles */
    body {
        background-color: #f7f7f7;
        color: #333;
    }

    /*Profile Section*/
    .profile-image {
        width: 200px;
        height: 250px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #b3a68d;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        max-width: 180px;
        margin-top: 10px;
    }

    .profile{
        font-size:30px;
        text-align: left;
        color: #b28478;
        padding-top:10px;
    }

    .profile-name {
        font-style: italic;
        font-size: 60px;
        color: #483e33;
        border-bottom: 2px solid #483e33;
        text-align: left;
        font-family: 'Georgia';
        padding-top:5px;
    }

    .highlight {
        color: #b28478;
        font-weight: bold;
    }

    /* Skill bars styling */
    .skill {
        margin-top: 1rem;
    }

    .skill p {
        display: flex;
        justify-content: space-between;
        font-weight: bold;
    }

    .progress-bar {
        background-color: #e0e0e0;
        height: 8px;
        border-radius: 5px;
        overflow: hidden;
    }

    .progress {
        background-color: #b28478;
        height: 100%;
    }

    .skill-font{
        font-size:40px;
        text-align: center;
        color: #483e33;
        padding-top:10px;
        padding-bottom: 25px;
    }

    .bg-white {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .bg-white:hover {
    transform: translateY(-10px); /* Moves the card up on hover */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Adds a shadow effect */
    }

    /*Hobby Section*/
    .card-img-top{
        width: 415px;
        height: 280px;
    }

    /* Card Styles */
    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        background-color: #fff;
        border-radius: 8px;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .card-body {
        padding: 20px;
        color: #333;
    }

    .card-title {
        font-size: 1.5em;
        color: #2a2a2a;
        margin-bottom: 15px;
    }

    .card-text {
        font-size: 1em;
        color: #6c6c6c;
        text-align: justify;
    }

    /* Animated Content */
    .animated {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s forwards;
    }

    .animated-delay {
        animation-delay: 0.3s;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- Profile Information -->
<div class="container">
    <div class="row">
        <div class="col-md-2 text-center animated animated-delay">
            <img src="{{ asset('images/tpy.jpeg') }}" class="profile-image" alt="Tan Pei Yee" />
        </div>
        <div class="col-md-10 animated animated-delay">
            <h4 class="profile">Hello, I'm</h4>
            <h2 class="mt-2 profile-name">
                Tan Pei Yee
            </h2>
            <p class="py-2">
                I'm a <span class="highlight"> Computer Science </span> student from <span class="highlight"> University of Malaysia Pahang Al-Sultan Abdullah (UMPSA) </span> with a strong skill set in game development, particularly using Unity and C# programming. I'm passionate about creating immersive, engaging gaming experiences and dedicated to continually learning new technologies and techniques to enhance my programming skills. With a focus on both technical proficiency and creativity, driven by my love for game development and a commitment to creating captivating digital experiences.
            </p>
        </div>
    </div>
</div>

<!-- Skill Section-->
<div class="container animated animated-delay">
    <div class="row">
        <h2 class="skill-font">My Skills</h2>
    </div>
</div>

<div class="container animated animated-delay">
    <div class="row justify-content-xl-center gy-3 gy-sm-4">
      <div class="col-12 col-sm-6 col-xl-5">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
          <h3 class="fw-bold  mb-2">Unity Development</h3>
          <p class="text-secondary fst-italic mb-4">Unity development is the process of creating interactive 2D and 3D games, augmented reality (AR), and virtual reality (VR) experiences using the Unity engine, a powerful platform known for its versatility, real-time rendering, and ease of use for cross-platform development.</p>
            <div class="skill">
                <p> <span>85%</span></p>
                <div class="progress-bar"><div class="progress" style="width: 85%;"></div></div>
            </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-5">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
          <h3 class="fw-bold mb-2">LUA Programming</h3>
          <p class="text-secondary fst-italic mb-4">Using Lua language in the Roblox engine involves scripting interactive gameplay, mechanics, and custom features within Roblox games, as Lua is Roblox’s primary programming language for controlling game logic and creating dynamic, engaging experiences.</p>
            <div class="skill">
                <p> <span>60%</span></p>
                <div class="progress-bar"><div class="progress" style="width: 60%;"></div></div>
            </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-5">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
          <h3 class="fw-bold mb-2">UI/UX Design</h3>
          <p class="text-secondary fst-italic mb-4">UI/UX design focuses on creating user-friendly, visually appealing, and intuitive digital experiences by combining the layout and interaction elements (UI) with user-centered research and design principles (UX) to enhance usability and satisfaction.</p>
            <div class="skill">
                <p> <span>75%</span></p>
                <div class="progress-bar"><div class="progress" style="width: 75%;"></div></div>
            </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-5">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
          <h3 class="fw-bold mb-2">3D Modeling and Animation</h3>
          <p class="text-secondary fst-italic mb-4">3D modeling and animation using Maya software involves creating, sculpting, and animating three-dimensional digital objects and characters for use in films, games, and visual effects, leveraging Maya's powerful tools for detailed modeling, texturing, rigging, and realistic animation.</p>
            <div class="skill">
                <p> <span>65%</span></p>
                <div class="progress-bar"><div class="progress" style="width: 65%;"></div></div>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- Hobbies Section -->
<section id="hobbies" class="py-5 bg-light animated animated-delay">
  <div class="container">
    <h2 class="text-center mb-4">My Hobbies</h2>
    <div class="row justify-content-center">
      <!-- Hobby 1: Game Development -->
      <div class="col-md-4">
        <div class="card shadow-lg rounded">
          <img src="{{ asset('images//game.png') }}" class="card-img-top" alt="Game Development">
          <div class="card-body">
            <h5 class="card-title">Game Development</h5>
            <p class="card-text text-secondary fst-italic">I love creating immersive, interactive games. From designing mechanics to coding in Unity, I am passionate about making engaging experiences.</p>
          </div>
        </div>
      </div>

      <!-- Hobby 2: Painting -->
      <div class="col-md-4">
        <div class="card shadow-lg rounded">
          <img src="{{ asset('images/paint.png') }}" class="card-img-top" alt="Painting">
          <div class="card-body">
            <h5 class="card-title">Painting</h5>
            <p class="card-text text-secondary fst-italic">Exploring my creative side with different mediums such as watercolors and acrylics. I love the process of turning blank canvases into colorful stories.</p>
          </div>
        </div>
      </div>

      <!-- Hobby 3: Photography -->
      <div class="col-md-4">
        <div class="card shadow-lg rounded">
          <img src="{{ asset('images/photography.png') }}" class="card-img-top" alt="Photography">
          <div class="card-body">
            <h5 class="card-title">Photography</h5>
            <p class="card-text text-secondary fst-italic">Capturing life's moments through the lens. Experimenting with light, angles, and perspectives to create powerful images that tell stories.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
