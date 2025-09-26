<?php
  include 'include/header.php';
  include 'include/database.php';
?>
<body>
  <div class="card p-4" style="width: 350px;">
    <h3 class="text-center mb-3">Login</h3>
    <form>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" placeholder="Enter email" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter password" required>
      </div>
      <button type="submit" class="btn btn-custom w-100">Login</button>
    </form>
    <p class="text-center mt-3">
      Don’t have an account? <a href="register.html">Register</a>
    </p>
  </div>
</body>
</html>
