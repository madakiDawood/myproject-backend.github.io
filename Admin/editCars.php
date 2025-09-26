 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Test Ride | My Showroom</title>
  <link rel="stylesheet" href="styles/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" /></head>

<body>
  <div class="layout">
    <div id="sidebar" class="sidebar">
      

      <ul class="nav flex-column py-4">
        <li class="nav-item">
          <div class="py-3">
        <button id="menuToggle" class="btn btn-outline-secondary">
          <i class="fa-solid fa-bars"></i>
        </button>
          </div>
        </li>

        <li class="nav-item pb-3">
          <a href="admin.php" class="nav-link">
            <i class="fa-solid fa-gauge"></i><span class="sidebar-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item dropdown pb-3">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fa-solid fa-car"></i>
            <span class="sidebar-text">Car Management</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addCars.php">Add Cars</a></li>
            <li><a class="dropdown-item" href="allCars.php">View all Cars</a></li>
          </ul>
        </li>


        <li class="nav-item pb-3">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-newspaper"></i><span class="sidebar-text">Blog Management</span>
          </a>
        </li>

        <li class="nav-item pb-3">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-cog"></i><span class="sidebar-text">Settings</span>
          </a>
        </li>

        <li class="nav-item pb-3">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-right-from-bracket"></i><span class="sidebar-text">Logout</span>
          </a>
        </li>
      </ul>  
    </div>




      <!-- Main Content -->
  <main>
    <form method="POST" class="form-control shadow p-4">
      <h2 class="text-center mb-4">Edit Car</h2>

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

      <button type="submit" class="btn btn-success w-100">Save Car</button>
    </form>
  </main>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
