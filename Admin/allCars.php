<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel | View All Cars</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

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
    <aside id="sidebar">
      <h2 class="h5 mb-3 sidebar-text">Admin Panel</h2>
      <hr class="border-secondary opacity-50">

      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="admin.html" class="nav-link">
            <i class="fa-solid fa-gauge"></i><span class="sidebar-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-car"></i>
    <span class="sidebar-text">Car Management</span>
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="addCars.html">Add Cars</a></li>
    <li><a class="dropdown-item" href="allCars.html">View all Cars</a></li>
  </ul>
</li>


        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-newspaper"></i><span class="sidebar-text">Blog Management</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-cog"></i><span class="sidebar-text">Settings</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-right-from-bracket"></i><span class="sidebar-text">Logout</span>
          </a>
        </li>
      </ul>
    </aside>

    <!-- Backdrop for mobile -->
    <div id="backdrop"></div>

    

    <!-- Main Content -->
    <main class="col-md-9 col-lg-10 p-4">
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
