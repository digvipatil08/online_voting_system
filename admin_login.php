<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex align-items-center justify-content-center vh-100">
  <div class="card p-4 shadow-lg" style="width: 350px;">
    <h4 class="text-center text-primary mb-3">Admin Login</h4>
    <form action="admin_panel.php" method="POST">
      <input type="text" name="username" placeholder="Username" class="form-control mb-3" required>
      <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
      <button class="btn btn-primary w-100">Login</button>
    </form>
  </div>
</body>
</html>
