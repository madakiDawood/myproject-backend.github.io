<?php
  include '../include/database.php';
  include '../include/header.php';
  include '../include/sidebar.php';

?>

<div id="layout">
  <!-- Sidebar -->
 

  <!-- Main Content -->
  <main id="main" class="p-4">
    <h2 class="mb-4 text-center">🚘 All Cars</h2>
    <div class="table-responsive">
      <!-- table -->
    </div>
  </main>
</div>




<body>
 <div class="topbar d-flex align-items-center gap-2 border-bottom px-3 py-2">
    <button id="menuToggle" class="btn btn-outline-secondary">
      <i class="fa-solid fa-bars"></i>
    </button>
    <h1 class="h5 mb-0">Welcome to the Admin Dashboard</h1>

    
  </div>

  <!-- Layout -->
  <div id="layout">

    <!-- Sidebar -->
    

    <!-- Backdrop for mobile -->
    <div id="backdrop"></div>

    

    <!-- Main Content -->
  <main id="main" class="p-4">
    <h2 class="mb-4 text-center">🚘 All Cars</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
          <thead class="text-center">
            <tr>
              <th scope="col">S/N</th>
              <th scope="col">Image</th>
              <th scope="col">Model</th>
              <th scope="col">Make</th>
              <th scope="col">Year</th>
              <th scope="col">Mileage</th>
              <th scope="col">Price</th>
              <th scope="col">Description</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td class="text-center"><img src="images/gwagon.jpeg" alt="Toyota Camry" width="120"></td>
              <td>Toyota Camry</td>
              <td>Toyota</td>
              <td>2021</td>
              <td>25,000 km</td>
              <td class="text-success fw-bold">N28,000,000</td>
              <td class="car-description">A sleek and comfortable sedan with excellent fuel economy and advanced safety features.</td>
              <td>
                <div class="d-flex">
                  <button class="btn btn-primary btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </div>
              </td>
            </tr>

             <tr>
              <td>1</td>
              <td class="text-center"><img src="images/gwagon.jpeg" alt="Toyota Camry" width="120"></td>
              <td>Toyota Camry</td>
              <td>Toyota</td>
              <td>2021</td>
              <td>25,000 km</td>
              <td class="text-success fw-bold">N28,000,000</td>
              <td class="car-description">A sleek and comfortable sedan with excellent fuel economy and advanced safety features.</td>
              <td>
                <div class="d-flex">
                  <button class="btn btn-primary btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </div>
              </td>
            </tr>

             <tr>
              <td>1</td>
              <td class="text-center"><img src="images/gwagon.jpeg" alt="Toyota Camry" width="120"></td>
              <td>Toyota Camry</td>
              <td>Toyota</td>
              <td>2021</td>
              <td>25,000 km</td>
              <td class="text-success fw-bold">N28,000,000</td>
              <td class="car-description">A sleek and comfortable sedan with excellent fuel economy and advanced safety features.</td>
              <td>
                <div class="d-flex">
                  <button class="btn btn-primary btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </div>
              </td>
            </tr>

             <tr>
              <td>1</td>
              <td class="text-center"><img src="images/gwagon.jpeg" alt="Toyota Camry" width="120"></td>
              <td>Toyota Camry</td>
              <td>Toyota</td>
              <td>2021</td>
              <td>25,000 km</td>
              <td class="text-success fw-bold">N28,000,000</td>
              <td class="car-description">A sleek and comfortable sedan with excellent fuel economy and advanced safety features.</td>
              <td>
                <div class="d-flex">
                  <button class="btn btn-primary btn-sm me-2">Edit</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </div>
              </td>
            </tr>
            <!-- Repeat for more cars -->
          </tbody>
        </table>
      </div>
    </main>
  </div>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
