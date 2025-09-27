<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Test Ride | My Showroom</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
  <div class="layout">

    <div id="sidebar" class="sidebar m-3" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
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
        <div class="table-responsive form-control shadow p-4">
                  <h2 class="mb-4 text-center">🚘 All Cars</h2>

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
                    <button onclick="window.location.href='editCars.php'" class="btn btn-primary btn-sm me-2">Edit</button>
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
                    <button onclick="window.location.href='editCars.php'" class="btn btn-primary btn-sm me-2">Edit</button>
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
                    <button onclick="window.location.href='editCars.php'" class="btn btn-primary btn-sm me-2">Edit</button>
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
                    <button onclick="window.location.href='editCars.php'" class="btn btn-primary btn-sm me-2">Edit</button>
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
                    <button onclick="window.location.href='editCars.php'" class="btn btn-primary btn-sm me-2">Edit</button>
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
                    <button onclick="window.location.href='editCars.php'" class="btn btn-primary btn-sm me-2">Edit</button>
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
                    <button onclick="window.location.href='editCars.php'" class="btn btn-primary btn-sm me-2">Edit</button>
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
                    <button onclick="window.location.href='editCars.php'" class="btn btn-primary btn-sm me-2">Edit</button>
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
                    <button onclick="window.location.href='editCars.php'" class="btn btn-primary btn-sm me-2">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </main>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
  </div>

</body>

</html>