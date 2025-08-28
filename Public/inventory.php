  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory | My Showroom</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg fixed-top bg-opacity-custom shadow" style="z-index: 1050;">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <span class="brand-normal">My</span>
        <span class="brand-showroom ms-1">Showroom</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link nav-hover" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover active" href="#">Inventory</a>
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
            <a class="nav-link nav-hover" href="booking.html">Book a Test Ride</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover" href="contact-us.html">Contact Us</a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Inventory Section -->
  <div class="container" id="inventorySection">
    <h2 class="inventory-title">Our Inventory</h2>
    <div class="row g-4 inventory-row">
      <!-- Inventory Item 1 -->
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

      <!-- Inventory Item 4 -->
      <div class="col-md-4">
        <div class="card inventory-card h-100 shadow">
          <img src="images/2021_Toyota_Land_Cruiser_300_3.4_ZX.png" class="card-img-top inventory-img" alt="Car 3">
          <div class="card-body">
            <h5 class="card-title">2021 Toyota Land Cruiser 300</h5>
            <p class="card-text">Automatic, Petrol, 8,000 km<br>Price: N40,000,000</p>
            <a href="#" class="btn btn-warning">View Details</a>
          </div>
        </div>
      </div>

<!-- Inventory Item 5 -->
      <div class="col-md-4">
        <div class="card inventory-card h-100 shadow">
          <img src="images/toyota.jpeg" class="card-img-top inventory-img" alt="Car 3">
          <div class="card-body">
            <h5 class="card-title">2024 Toyota Camry</h5>
            <p class="card-text">Automatic, Petrol, 8,000 km<br>Price: N15,000,000</p>
            <a href="#" class="btn btn-warning">View Details</a>
          </div>
        </div>
      </div>

      <!-- Inventory Item 6 -->
      <div class="col-md-4">
        <div class="card inventory-card h-100 shadow">
          <img src="images/honda.jpeg" class="card-img-top inventory-img" alt="Car 3">
          <div class="card-body">
            <h5 class="card-title">2022 Honda Accord</h5>
            <p class="card-text">Automatic, Petrol, 8,000 km<br>Price: N10,000,000</p>
            <a href="#" class="btn btn-warning">View Details</a>
          </div>
        </div>
      </div>

      
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>