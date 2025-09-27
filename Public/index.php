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
  </nav>  <div id="navbar-spacer"></div>

  <!-- Banner Section -->
<section class="banner-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text and CTA -->
      <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
        <h1 class="display-5 fw-bold mb-3">Welcome to <span class="brand-showroom">My Showroom</span></h1>
        <p class="lead mb-4">
          Discover the best selection of new and pre-owned vehicles. Quality, trust, and unbeatable deals—your dream car awaits!
        </p>
        <a href="inventory.php" class="btn btn-warning btn-lg px-4 py-2 banner-cta">Browse Inventory</a>
      </div>
      <!-- Image -->
      <div class="col-md-6 text-center">
        <img src="images/showroom.jpeg"
             alt="Showroom Banner" class="img-fluid rounded banner-img shadow">
      </div>
    </div>
  </div>
</section>

  <!-- Inventory Section -->
  <div class="container" id="inventorySection">
    <h2 class="inventory-title">Our Inventory</h2>
    <div class="row g-4 inventory-row">
      <div class="col-md-4">
        <div class="card inventory-card h-100 shadow">
          <img src="images/audi.jpeg" class="card-img-top inventory-img" alt="Car 1">
          <div class="card-body">
            <h5 class="card-title">2023 Audi Q8</h5>
            <p class="card-text">Automatic, Petrol, 15,000 km<br>Price: N18,000,000</p>
            <a href="#" class="btn btn-warning">View Details</a>
          </div>
        </div>
      </div>
      <!-- Inventory Item 2 -->
      <div class="col-md-4">
        <div class="card inventory-card h-100 shadow">
          <img src="images/gwagon.jpeg" class="card-img-top inventory-img" alt="Car 2">
          <div class="card-body">
            <h5 class="card-title">2023 Mercedes G63</h5>
            <p class="card-text">Manual, Petrol, 10,000 km<br>Price: N80,000,000</p>
            <a href="#" class="btn btn-warning">View Details</a>
          </div>
        </div>
      </div>
      <!-- Inventory Item 3 -->
      <div class="col-md-4">
        <div class="card inventory-card h-100 shadow">
          <img src="images/range_rover.jpeg" class="card-img-top inventory-img" alt="Car 3">
          <div class="card-body">
            <h5 class="card-title">2025 Range Rover Autobiography</h5>
            <p class="card-text">Automatic, Petrol, 8,000 km<br>Price: N38,000,000</p>
            <a href="#" class="btn btn-warning">View Details</a>
          </div>
        </div>
      </div>

    </div>
<div class="text-center my-4">
  <a href="./inventory.php" class="btn btn-outline-secondary btn-lg view-more-btn">View More</a>
</div>
  </div>

  <!-- Latest Blog / News Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Latest News & Blog</h2>
      <p class="text-muted">Stay updated with the latest car trends, reviews, and tips</p>
    </div>
    <div class="row g-4" id="news-container">
      
      <!-- Blog Post 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Car News">
          <div class="card-body">
            <h5 class="card-title">Top 5 Fuel-Efficient Cars of 2025</h5>
            <p class="card-text text-muted">Discover the latest models that save fuel while delivering performance.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
          </div>
          <div class="card-footer bg-white border-0 text-muted small">
            <i class="bi bi-calendar"></i> Aug 18, 2025
          </div>
        </div>
      </div>

      <!-- Blog Post 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Car Maintenance">
          <div class="card-body">
            <h5 class="card-title">How to Maintain Your Car for Longevity</h5>
            <p class="card-text text-muted">Essential car care tips that every car owner should know.</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
          </div>
          <div class="card-footer bg-white border-0 text-muted small">
            <i class="bi bi-calendar"></i> Aug 12, 2025
          </div>
        </div>
      </div>

      <!-- Blog Post 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Car Buying Guide">
          <div class="card-body">
            <h5 class="card-title">Ultimate Guide to Buying a Used Car</h5>
            <p class="card-text text-muted">Learn how to choose the right used car without getting scammed.</p>
            <a href="#" class="btn btn-outline-danger">Read More</a>
          </div>
          <div class="card-footer bg-white border-0 text-muted small">
            <i class="bi bi-calendar"></i> Aug 05, 2025
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>