@extends('layouts.master')

@section('content')
<h1 class="ms-5">Contact</h1>

<div class="d-flex justify-content-center align-items-center mt-3">
  <div class="col-md-11">
    <form id="contactForm" method="POST" action="{{ url('/contact') }}" class="p-4 border rounded bg-light">
        @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required >
      </div>  
      <div class="mb-3">
        <label for="email" class="form-label">Email addresss</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
      </div>

      <div class="mb-3">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter your message" required></textarea>
  </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        // Prevent the form from submitting immediately
        event.preventDefault();

        // Get values from the form fields
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Create a message to display
        const submitMessage = `Your details:\n\nName: ${name}\nEmail: ${email}\nMessage: ${message}\n\nYour information has been submitted successfully.`;

        // Show a prompt with the form data
        alert(submitMessage);

        // After displaying the prompt, submit the form
        this.submit();
    });
</script>

@endsection
