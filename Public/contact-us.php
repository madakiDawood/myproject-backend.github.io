<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Test Ride | My Showroom</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>
<body>
<div class="container">
  
 <nav class="navbar navbar-expand-lg fixed-top bg-opacity-custom shadow" style="z-index: 1050;">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="./index.php">
        <span class="brand-normal">My</span>
        <span class="brand-showroom ms-1">Showroom</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link nav-hover" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="./inventory.php">Inventory</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-hover" href="#" id="financingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Financing
            </a>
            <ul class="dropdown-menu" aria-labelledby="financingDropdown">
              <li><a class="dropdown-item" href="#">Pricing</a></li>
              <li><a class="dropdown-item" href="#">Loans</a></li>
              <li><a class="dropdown-item" href="#">Features</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover active" href="./booking.php">Book a Test Ride</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="./contact-us.php">Contact Us</a>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Contact / Visit Us Section -->
<section class="contact py-5" id="contact">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col">
        <h2 class="fw-bold">Contact / Visit Us</h2>
        <p class="text-muted">We’d love to hear from you! Reach out or find us on the map below.</p>
      </div>
    </div>

    <div class="row g-4">
      <!-- Contact Form -->
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary px-4" 
          style=
          "font-weight: 600;
          border-radius: 2rem;
          background-color: #ffc107 !important;
          padding: 0.6rem 2.5rem;
          letter-spacing: 1px;
          transition: background 0.2s, color 0.2s, box-shadow 0.2s;
          box-shadow: 0 2px 8px rgba(35, 209, 78, 0.08);
          border: none;
          color: #fff;"

          hover=
          "transform: translateY(-2px);
          background-color: #e0a800 !important;
          color: #fff;
          box-shadow: 0 4px 12px rgba(33, 37, 41, 0.15);"
          >Send Message</button>
        </form>
      </div>

      <!-- Map -->
      <div class="col-md-6">
        <div class="map-container" style="height: 100%; min-height: 350px; border-radius: 10px; overflow: hidden;">
          <!-- <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.663609065369!2d3.379205914770162!3d6.451927025592489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf50d1e3e2b35%3A0xe2dff3bbf02c9f62!2sLagos%2C%20Nigeria!5e0!3m2!1sen!2sng!4v1682345678901!5m2!1sen!2sng" 
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d688.751708439635!2d9.7938801793004!3d10.310235525125464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sng!4v1755796181385!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      
    </div>
  </div>
</section>

          </div>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  
</body>
</html>