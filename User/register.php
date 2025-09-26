<?php
  include 'include/header.php';
  include 'include/database.php';
?>
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
