<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>
<body>
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
              <th scope="col" style="width:300px;">Quantity</th>
              <th scope="col">Total Price</th>
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
              <td><input type="number" min="1" max="100" value=1 style="width: 100%;"></td>
              <td class="text fw-bold">N28,000,000</td>
              <td class="car-description">A sleek and comfortable sedan with excellent fuel economy and advanced safety features.</td>
              <td>
                <div class="d-flex">
                  <button class="btn btn-danger btn-sm">Remove</button>
                </div>
              </td>
            </tr>

             <tr>
              <td>1</td>
              <td class="text-center"><img src="images/gwagon.jpeg" alt="Toyota Camry" width="120"></td>
              <td>Toyota Camry</td>
              <td>Toyota</td>
              <td>2021</td>
              <td><input type="number" min="1" max="100" value=1 style="width: 100%;"></td>
              <td class="text fw-bold">N28,000,000</td>
              <td class="car-description">A sleek and comfortable sedan with excellent fuel economy and advanced safety features.</td>
              <td>
                <div class="d-flex">
                  <button class="btn btn-danger btn-sm">Remove</button>
                </div>
              </td>
            </tr>

             <tr>
              <td>1</td>
              <td class="text-center"><img src="images/gwagon.jpeg" alt="Toyota Camry" width="120"></td>
              <td>Toyota Camry</td>
              <td>Toyota</td>
              <td>2021</td>
              <td><input type="number" min="1" max="100" value=1 style="width: 100%;"></td>
              <td class="text fw-bold">N28,000,000</td>
              <td class="car-description">A sleek and comfortable sedan with excellent fuel economy and advanced safety features.</td>
              <td>
                <div class="d-flex">
                  <button class="btn btn-danger btn-sm">Remove</button>
                </div>
              </td>
            </tr>

             <tr>
              <td>1</td>
              <td class="text-center"><img src="images/gwagon.jpeg" alt="Toyota Camry" width="120"></td>
              <td>Toyota Camry</td>
              <td>Toyota</td>
              <td>2021</td>
              <td><input type="number" min="1" max="100" value=1 style="width: 100%;"></td>
              <td class="text fw-bold">N28,000,000</td>
              <td class="car-description">A sleek and comfortable sedan with excellent fuel economy and advanced safety features.</td>
              <td>
                <div class="d-flex">
                  <button class="btn btn-danger btn-sm">Remove</button>
                </div>
              </td>
            </tr>
            <!-- Repeat for more cars -->
          </tbody>
        </table>
      </div>
    </main>
  </div>
    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>