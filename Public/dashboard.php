<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div class="d-flex"> 
   <aside class= "myaside bg-dark text-white p-3">
           
                <h2 class="mb-4">Admin Panel</h2>
                <breaker></breaker>
            <ul>
                <li>
                    <a href="https://google.com"><i class="fa-solid fa-gauge"></i>Dashboard</a>
                </li>

                <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-car"></i> Car Management
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="addCars.html">Add Cars</a></li>
    <li><a class="dropdown-item" href="allCars.html">View all Cars</a></li>
  </ul>
</li>

                <li>
                    <a href="https://google.com"><i class="fa-solid fa-newspaper"></i>Blog Management</a>
                </li>

                <li>
                    <a href="https://google.com"><i class="fa-solid fa-cog"></i>settings</a>
                </li>

                <li>
                    <a href="https://google.com"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                </li>
            </ul>
        </aside>
    
        <section class="flex-grow-1 p-4">
             <div class="row">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="car1.jpg" class="card-img-top" alt="Car 1">
        <div class="card-body">
          <h5 class="card-title">Car Model 1</h5>
          <p class="card-text">Some details about this car.</p>
          <a href="#" class="btn btn-primary">View</a>
        </div>
      </div>
    </div>

        </section>
    </div> 
</body>
</html>