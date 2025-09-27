<?php
  include 'include/header.php';
?>
<body>

  <!-- Layout -->
 <div class="layout">
    
   <?php 
   include '/include/sidebar.php'; 
   include '/include/database.php';
   ?>

      <!-- Main Content -->
  <main class="m-0">
    <form method="POST" class="form-control shadow p-4">
      <h2 class="text-center mb-4">Add Cars</h2>

      <div class="mb-3">
        <label for="carModel" class="form-label">Car Model</label>
        <input type="text" class="form-control" id="carModel" placeholder="Enter car model">
      </div>

      <div class="mb-3">
        <label for="carMake" class="form-label">Car Make</label>
        <input type="text" class="form-control" id="carMake" placeholder="Enter car make">
      </div>

      <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <input type="date" class="form-control" id="year">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" placeholder="Enter price">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Car Description</label>
        <textarea class="form-control" id="description" rows="3" placeholder="Enter car description"></textarea>
      </div>

      <div class="mb-3">
        <label for="mileage" class="form-label">Mileage</label>
        <input type="number" class="form-control" id="mileage" placeholder="Enter Mileage">
      </div>

      <div class="mb-3">
        <label for="carImage" class="form-label">Car Image</label>
        <input type="file" class="form-control" id="carImage">
      </div>

      <button type="submit" class="btn btn-success w-100">Add Car</button>
    </form>
  </main>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
