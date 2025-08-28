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
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle (includes Popper.js which dropdowns need) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
 <div class="topbar d-flex align-items-center gap-2 border-bottom px-3 py-2">
    <button id="menuToggle" class="btn btn-outline-secondary">
      <i class="fa-solid fa-bars"></i>
    </button>
    <h1 class="h5 mb-0">Welcome to the Admin Dashboard</h1>

    <!-- (Optional) filter next to the heading -->
    <div class="ms-auto d-flex align-items-center gap-2">
      <label for="carCategory" class="form-label mb-0 me-1 d-none d-sm-inline">Category:</label>
      <select id="carCategory" class="form-select form-select-sm w-auto">
        <option value="all">All Cars</option>
        <option value="sedan">Sedan</option>
        <option value="suv">SUV</option>
        <option value="coup">Coup</option>
      </select>
    </div>
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

    <!-- Main -->
    <main id="main">
      <div class="container-fluid">
        <div class="row g-3">
          <div class="col-md-3">
            <div class="card text-bg-primary">
              <div class="card-body">
                <h5 class="card-title">Total No. of Cars</h5>
                <p class="card-text mb-1" id="carCount">120</p>
                <small id="carGrowth" class="fw-semibold">+10% since last month</small>
              </div>
            </div>
          </div>
          <!-- ... your other cards ... -->
           <div class="col-md-3">
            <div class="card text-bg-primary">
              <div class="card-body">
                <h5 class="card-title">Total No. of Cars</h5>
                <p class="card-text mb-1" id="carCount">120</p>
                <small id="carGrowth" class="fw-semibold">+10% since last month</small>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-primary">
              <div class="card-body">
                <h5 class="card-title">Total No. of Cars</h5>
                <p class="card-text mb-1" id="carCount">120</p>
                <small id="carGrowth" class="fw-semibold">+10% since last month</small>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-primary">
              <div class="card-body">
                <h5 class="card-title">Total No. of Cars</h5>
                <p class="card-text mb-1" id="carCount">120</p>
                <small id="carGrowth" class="fw-semibold">+10% since last month</small>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
  </div>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
