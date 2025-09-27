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
