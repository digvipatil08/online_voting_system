<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Voting System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-primary d-flex align-items-center justify-content-center vh-100">
  <div class="card shadow-lg p-4 rounded-4" style="width: 400px;">
    <h3 class="text-center mb-3 text-primary">Voter Login</h3>
    <form action="vote.php" method="post">
      <input type="text" name="voter_id" class="form-control mb-3" placeholder="Enter Voter ID" required>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <div class="text-center mt-3">
      <a href="register.php" class="text-decoration-none">New user? Register here</a>
    </div>
  </div>
</body>
</html>
