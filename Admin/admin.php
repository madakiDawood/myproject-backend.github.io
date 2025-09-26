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
    referrerpolicy="no-referrer" />
</head>

<body>
  <div class="layout">
  <div id="sidebar" class="sidebar">
      <!-- <h2 class="h5 mb-3 pb-3 sidebar-text">Admin Panel</h2> -->
      

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


   

    <main>
      
      <div class="topbar d-flex align-items-center gap-2 border-bottom form-control shadow p-4 mb-5">
    
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