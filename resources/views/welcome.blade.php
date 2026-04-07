<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Welcome to Our  Blog</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
  background: #fff;
  font-family: Arial, sans-serif;
  padding-top: 80px;
}

/* Header */
header {
  background: #1a1a1a;
  padding: 15px 30px;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 100;
  display: flex;
  justify-content: space-between; /* Space between links */
  align-items: center;
}
header .nav-left, header .nav-right {
  display: flex;
  gap: 20px;
}
header a {
  text-decoration: none;
  color: white;
  font-weight: bold;
}
header a:hover {
  color: #ffc107;
}

/* Hero Section */
.hero {
  text-align: center;
  padding: 100px 20px;
}
.hero h1 {
  font-size: 2.8rem;
  margin-bottom: 15px;
}
.hero p {
  font-size: 1.1rem;
  margin-bottom: 25px;
  color: #555;
}
.btn-primary-custom {
  background: #007bff;
  color: white;
  padding: 10px 25px;
  font-weight: bold;
  text-decoration: none;
  border-radius: 5px;
}
.btn-primary-custom:hover {
  background: #0056b3;
  color: white;
}

/* Footer */
footer {
  text-align: center;
  color: #666;
  margin-top: 50px;
  padding: 25px 0;
}
/* hover */
.contact-btn {
    transition: background-color 0.3s, color 0.3s;
}

.contact-btn:hover {
    background-color: #0c7b8a; /* darker shade of info */
    color: white;               /* optional, ensures text stays white */
}
</style>
</head>
<body>

<header>
  <div class="nav-left">
    <a href="/" class="btn btn-info mb-3">Our Go To Blog</a>
  </div>
  <div class="nav-right">
    <a href="#about" class="btn btn-info mb-3">About</a>
   <a href="/contact-admin" class="btn btn-info mb-3 contact-btn">Click Me</a>
  </div>
</header>

<div class="hero">
  <h1>Welcome to Our Blog</h1>
  <p>Insights, ideas, and updates — shared in a simple, readable format.</p>
  <a class="btn-primary-custom" href="/blog-post">Create Post</a>
</div>

<footer>
  <p>© 2026 My Blog | Simple, Clean, Focused Content</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>