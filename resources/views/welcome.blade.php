@extends('layouts.app')
@section('title',"Welcome")
@section('content')
  <header>
    <div class="floating-tech-shapes">
      <div class="shape hexagon-1"></div>
      <div class="shape hexagon-2"></div>
      <div class="shape line-1"></div>
      <div class="shape line-2"></div>
      <div class="shape triangle-1"></div>
      <div class="shape triangle-2"></div>
  </div>
    <div class="tech-particles" id="particles"></div>
      <div class="header-content">
      <img src="https://ucarecdn.com/c630466c-0578-4d87-8f48-28e3f95cd5f4/-/format/auto/" alt="BITS Logo" class="logo">
      <h1 id="decryptText">Bontoc Information Technology Society</h1>
      <p>Advancing Technology Education in the Bontoc Community</p>
    </div>
  </header>

  <section class="programs-section">
    <h2>Our Programs</h2>
    <div class="programs-grid">
    <div class="program-card">
      <i class="fas fa-laptop-code"></i>
      <h3>IT Training Workshops</h3>
      <p>Hands-on technical training for all skill levels</p>
    </div>
    <div class="program-card">
      <i class="fas fa-users"></i>
      <h3>Tech Mentorship</h3>
      <p>One-on-one guidance from industry experts</p>
    </div>
    <div class="program-card">
      <i class="fas fa-project-diagram"></i>
      <h3>Community Projects</h3>
      <p>Collaborative initiatives for local tech development</p>
    </div>
    <div class="program-card">
      <i class="fas fa-graduation-cap"></i>
      <h3>Digital Literacy Classes</h3>
      <p>Basic to advanced digital skills training</p>
    </div>
    </div>
  </section>

  <section class="join-section">
    <h2>Join Us</h2>
    <div class="benefits-list">
    <div class="benefit-item">
      <div class="benefit-icon">
      <i class="fas fa-check"></i>
      </div>
      Access to exclusive workshops and training sessions
    </div>
    <div class="benefit-item">
      <div class="benefit-icon">
      <i class="fas fa-check"></i>
      </div>
      Networking opportunities with tech professionals
    </div>
    <div class="benefit-item">
      <div class="benefit-icon">
      <i class="fas fa-check"></i>
      </div>
      Resources for career development
    </div>
    <div class="benefit-item">
      <div class="benefit-icon">
      <i class="fas fa-check"></i>
      </div>
      Participation in community tech projects
    </div>
    </div>
    <button class="join-btn">Join Now</button>
  </section>

  <footer>
    <div class="footer-container">
    <div class="footer-grid">
      <div class="footer-column">
      <h3>Contact Us</h3>
      <div class="footer-contact">
        <p><i class="fas fa-envelope"></i> Email: contact@bontocit.org</p>
        <p><i class="fas fa-phone"></i> Phone: (123) 456-7890</p>
        <p><i class="fas fa-map-marker-alt"></i> Bontoc, Southern Leyte</p>
      </div>
      </div>

      <div class="footer-column">
      <h3>Quick Links</h3>
      <ul class="footer-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Programs</a></li>
        <li><a href=" {{ route('register') }} ">Join Us</a></li>
        <li><a href="{{ route('about.us') }}">About</a></li>
      </ul>
      </div>

      <div class="footer-column">
      <h3>Follow Us</h3>
      <div class="social-links">
        <a href="https://www.facebook.com/slsubitsofficial/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
      </div>
      <div class="copyright">
        <p>© 2025 Bontoc Information Technology Society</p>
        <p>All rights reserved</p>
      </div>
      </div>
    </div>
    </div>
  </footer>

  <script>
   
    function createParticles() {
    const particlesContainer = document.getElementById('particles');
    const particleCount = 50;

    for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');

      particle.style.width = `${Math.random() * 5}px`;
      particle.style.height = particle.style.width;
      particle.style.left = `${Math.random() * 100}%`;
      particle.style.animationDelay = `${Math.random() * 10}s`;
      particle.style.opacity = Math.random();

      particlesContainer.appendChild(particle);
    }
    }

    createParticles();

    function smoothDecrypt(element, text, speed = 50) {
    const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+{}|:<>?-=[];,./";
    let scrambled = Array.from(text, () => chars[Math.floor(Math.random() * chars.length)]);
    let iterations = 0;
    let revealRate = Math.ceil(text.length / 10); // More letters revealed each cycle for smoothness

    element.style.opacity = 1; // Fade in effect

    const interval = setInterval(() => {
      scrambled = scrambled.map((char, index) => {
      if (index < iterations) return text[index]; // Reveal correct letters
      return chars[Math.floor(Math.random() * chars.length)]; // Keep scrambling
      });

      element.innerText = scrambled.join("");

      if (iterations >= text.length) {
      clearInterval(interval);
      }

      iterations += revealRate; // Smoothly reveal multiple letters at once
    }, speed);
    }

    const h1Element = document.getElementById("decryptText");
    const originalText = h1Element.innerText;

    h1Element.innerText = "Ivuavj Pumvythapvu Aljouvsvnf Zvjplaf"; // Hide text initially
    setTimeout(() => smoothDecrypt(h1Element, originalText, 180), 1000); // Delay before animation starts
  </script>
@endsection