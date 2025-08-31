<?php
    include './include/database.php';
    include './include/header.php';
    include './include/navigation.php';
    include './include/footer.php'
  ?>
<body>


  <!-- Navbar -->


  <!-- Book a Test Ride Form Section -->
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 </body>
 </html>