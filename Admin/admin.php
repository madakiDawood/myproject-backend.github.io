<?php
  include './include/database.php';
  include './include/header.php';
?>

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

    <!-- Sidebar --><?  include './include/sidebar.php';
?>
    

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
