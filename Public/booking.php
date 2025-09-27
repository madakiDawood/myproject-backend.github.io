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


  <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "myprojectdatabase";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>


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

  <div class="bg-image-booking" style="background-image: url('images/gwagon.jpeg');">
    <div class="overlay-booking d-flex justify-content-center align-items-center">
      
<div class="container book-ride-container">
  <h2 class="mb-4 text-center book-ride-title">Book a Test Ride</h2>
  <form class="book-ride-form">
      <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
      </div>
      <div class="mb-3">
        <label for="emailAddress" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="emailAddress" placeholder="Enter your email" required>
      </div>
      <div class="mb-3">
        <label for="phoneNumber" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
      </div>
      <div class="mb-3">
        <label for="vehicleModel" class="form-label">Vehicle Model</label>
         <select class="form-control" id="vehicleModel" required>
          <option value="" disabled selected>Select a vehicle model</option>
          <option value="model1">2023 Audi Q8</option>
          <option value="model2">2023 Mercedes G63</option>
          <option value="model3">2025 Range Rover Autobiography</option> 
          <option value="model4">2021 Toyota Land Cruiser 300</option>
          <option value="model5">2024 Toyota Camry</option>
          </select>
      </div>
      <div class="mb-3">
        <label for="preferredDate" class="form-label">Preferred Date</label>
        <input type="date" class="form-control" id="preferredDate" required>
      </div>
      <div class="mb-3">
        <label for="preferredTime" class="form-label">Preferred Time</label>
        <input type="time" class="form-control" id="preferredTime" required>
      </div>
      <button type="submit" class="btn btn-warning w-100">Book Now</button>
    </form>
  </div>
</div>
</div>
<script src="script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 </body>
 </html>