<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>
<body>
  <div class="card p-4">
    <div class="profile-header">
      <img src="images/images.jpeg" alt="User Avatar">
      <h4 id="username">Dawud Bala</h4>
      <p class="text-muted">User Profile</p>
      <button class="btn btn-custom btn-sm" id="editBtn">Edit Profile</button>
    </div>

    <form id="profileForm" class="mt-3">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" value="Your Name" disabled>
        </div>
        <div class="col-md-6">
          <label class="form-label"></label>
          <input type="email" class="form-control" value="Your Email" disabled>
        </div>
        <div class="col-md-6">
          <label class="form-label"></label>
          <input type="text" class="form-control" value="Tel" disabled>
        </div>
        <div class="col-md-6">
          <label class="form-label"></label>
          <input type="date" class="form-control" value="DOB" disabled>
        </div>
        <div class="col-md-12">
          <label class="form-label">Address</label>
          <textarea class="form-control" rows="2" disabled></textarea>
        </div>
      </div>

      <div class="text-center mt-4 d-none" id="saveCancelBtns">
        <button type="submit" class="btn btn-custom me-2">Save Changes</button>
        <button type="button" class="btn btn-secondary" id="cancelBtn">Cancel</button>
      </div>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
