<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
  
</head>
<body>
  <div class="card p-4" style="width: 400px;">
    <h3 class="text-center mb-3">Register</h3>
    <form>
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" placeholder="Enter full name" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" placeholder="Enter email" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter password" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control" placeholder="Confirm password" required>
      </div>
      <button type="submit" class="btn btn-custom w-100">Register</button>
    </form>
    <p class="text-center mt-3">
      Already have an account? <a href="login.html">Login</a>
    </p>
  </div>
</body>
</html>
