<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>REYMART | Full Stack Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

  <style>
    :root {
      --bg-color: #121212;
      --text-color: #f8f9fa;
      --card-bg: #1f1f1f;
      --accent-color: #00bcd4;
      --progress-bg: #2a2a2a;
      --hover-color: #0097a7;
    }

    body.light-mode {
      --bg-color: #ffffff;
      --text-color: #212529;
      --card-bg: #f8f9fa;
      --accent-color: #007bff;
      --progress-bg: #dee2e6;
    }

    body {
      background-color: var(--bg-color);
      color: var(--text-color);
      scroll-behavior: smooth;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      transition: background-image 1s ease-in-out;
    }

    .navbar {
      background-color: var(--card-bg);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
      z-index: 999;
    }

    .navbar-light .navbar-nav .nav-link {
      color: var(--text-color);
      transition: color 0.3s ease;
    }

    .navbar-light .navbar-nav .nav-link:hover {
      color: var(--accent-color);
    }

    .hero-img {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid var(--accent-color);
      transition: transform 0.3s ease;
    }

    .hero-img:hover {
      transform: scale(1.1);
    }

    .typing {
      color: var(--accent-color);
      font-weight: bold;
      font-size: 1.5rem;
    }

    .skills .progress {
      height: 20px;
      background-color: var(--progress-bg);
      border-radius: 10px;
    }

    .skills .progress-bar {
      background-color: var(--accent-color);
      border-radius: 10px;
    }

    .portfolio-item {
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .portfolio-item:hover {
      transform: translateY(-10px);
    }

    footer {
      background-color: var(--card-bg);
      color: #aaa;
      padding: 30px 0;
      text-align: center;
      margin-top: 50px;
      border-top: 2px solid var(--accent-color);
    }

    .socials a {
      margin: 0 10px;
      font-size: 1.2rem;
      color: var(--text-color);
      transition: color 0.3s ease;
    }

    .socials a:hover {
      color: var(--accent-color);
    }

    #scrollTopBtn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      display: none;
      z-index: 999;
      background-color: var(--accent-color);
      color: #fff;
      border-radius: 50%;
      padding: 10px 15px;
      border: none;
      font-size: 20px;
      transition: opacity 0.3s ease;
    }

    #scrollTopBtn:hover {
      background-color: var(--hover-color);
    }

    .card:hover {
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      transform: translateY(-10px);
    }

    .testimonial-card {
      background-color: var(--card-bg);
      color: var(--text-color);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .testimonial-card .quote {
      font-size: 2rem;
      color: var(--accent-color);
    }

    .testimonial-card .author {
      margin-top: 15px;
      font-weight: bold;
      font-size: 1.2rem;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">REYMART</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        <li class="nav-item">
          <button id="themeToggle" class="btn btn-outline-light btn-sm ms-2"><i class="fas fa-moon"></i></button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="text-center py-5 mt-5">
  <img src="http://localhost/myWebinfo/img/rey.jpg" alt="Reymart" class="hero-img mb-3">
  <h1>Hi, I'm Reymart Alastra</h1>
  <h4 class="typing mb-3" id="typed"></h4>
  <div class="socials">
    <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-github"></i></a>
    <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-linkedin"></i></a>
    <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-twitter"></i></a>
  </div>
</section>

<!-- About -->
<section id="about" class="container py-5">
  <h2 class="text-center mb-4">About Me</h2>
  <p class="lead">I am a passionate Full Stack Developer with extensive experience in building modern web applications. I specialize in JavaScript, PHP, and MySQL, and have a strong foundation in creating scalable, responsive solutions. Currently, I am focused on developing full-stack applications using Laravel and React.</p>
</section>

<!-- Skills -->
<section id="skills" class="container py-5">
  <h2 class="text-center mb-4">Skills</h2>
  <div class="skills">
    <p>HTML, CSS, JavaScript</p>
    <div class="progress mb-3"><div class="progress-bar" style="width: 90%;">90%</div></div>
    <p>PHP & MySQL</p>
    <div class="progress mb-3"><div class="progress-bar" style="width: 85%;">85%</div></div>
    <p>Laravel</p>
    <div class="progress mb-3"><div class="progress-bar" style="width: 80%;">80%</div></div>
    <p>React & Node.js</p>
    <div class="progress"><div class="progress-bar" style="width: 75%;">75%</div></div>
  </div>
</section>

<!-- Experience -->
<section id="experience" class="container py-5">
  <h2 class="text-center mb-4">Experience</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="card bg-dark text-light mb-3">
        <div class="card-body">
          <h5 class="card-title">Full Stack Developer at ABC Corp</h5>
          <p class="card-text">Developed scalable web applications using PHP, MySQL, React, and Node.js. Led junior developers and collaborated with clients on project specs.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card bg-dark text-light mb-3">
        <div class="card-body">
          <h5 class="card-title">Web Developer at XYZ Ltd</h5>
          <p class="card-text">Built user-friendly websites using HTML, CSS, JavaScript, and PHP. Integrated APIs and ensured high-quality performance and design standards.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="container py-5">
  <h2 class="text-center mb-4">What People Say</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="testimonial-card">
        <p class="quote">"Reymart is a brilliant developer with an eye for detail. He delivered beyond our expectations!"</p>
        <p class="author">John Doe, CEO of ABC Corp</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <p class="quote">"We were impressed by Reymart's ability to understand complex problems and find innovative solutions." </p>
        <p class="author">Jane Smith, CTO of XYZ Ltd</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <p class="quote">"His technical expertise is outstanding, and his communication skills are top-notch." </p>
        <p class="author">Emily Green, Project Manager at Tech Innovations</p>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<!-- Contact -->
<section id="contact" class="container py-5">
  <h2 class="text-center mb-4">Contact Me</h2>
  <p class="text-center mb-4">If you have any inquiries or projects, feel free to reach out!</p>
  
      <!-- Messenger Button -->
      <div class="text-center mt-4">
        <a href="https://m.me/alastrareymart14" target="_blank" class="btn btn-outline-primary">
          <i class="fab fa-facebook-messenger"></i> Message Me on Messenger
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <p>&copy; 2025 Reymart Alastra. All rights reserved.</p>
</footer>

<!-- Scroll to Top Button -->
<button id="scrollTopBtn" onclick="scrollToTop()"><i class="fas fa-arrow-up"></i></button>

<!-- Bootstrap and JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  // Typewriting effect
  var options = {
    strings: ["Full Stack Developer", "Web Developer", "PHP Enthusiast", "React/Node.js Developer"],
    typeSpeed: 50,
    backSpeed: 25,
    backDelay: 1000,
    loop: true
  };
  var typed = new Typed("#typed", options);

  // Scroll to Top
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    var scrollBtn = document.getElementById("scrollTopBtn");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  }

  function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  // Theme Toggle
  document.getElementById("themeToggle").onclick = function() {
    document.body.classList.toggle("light-mode");
  };
</script>

</body>
</html>
