<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact - About the Creator</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    background-color: #f8f9fa;
    padding-top: 70px;
  }
  .profile-card {
    max-width: 600px;
    margin: auto;
    background-color: #fff;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  }
  .profile-card img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
  }
  .social-icons a {
    margin: 0 10px;
    font-size: 1.5rem;
    color: #007bff;
    transition: transform 0.2s;
  }
  .social-icons a:hover {
    transform: scale(1.2);
  }
</style>
</head>
<body>

<div class="container">
  <div class="profile-card text-center">
    <img src="{{ asset('images/chelsea.jpg') }}" alt="Sabastine4u">
    <h2>Aguluka Sabastine</h2>
    <h5 class="text-muted">Creator of This Blog</h5>
    <p>Hello! I'm the developer behind this blog. I created it to share news, updates, and insights, I enjoy coding, football,  chess and connecting with fellow enthusiasts.</p>

    <ul class="list-unstyled text-start mt-4">
      <li><strong>Email:</strong> sabastineaguluka@gmail.com</li>
      <li><strong>Location:</strong> Lagos, Nigeria</li>
      <li><strong>Phone:</strong> +234 70 420 70312</li>
    </ul>

    <div class="social-icons mt-3">
      <a href="https://x.com/Just_Luka4u" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin"></i></a>
      <a href="https://www.linkedin.com/in/sabastine-chibuike-aguluka-9872b9119/" target="_blank"><i class="fab fa-github"></i></a>
    </div>

    <a href="/" class="btn btn-primary mt-4">Back to HomePage</a>
  </div>
</div>
</body>
</html>