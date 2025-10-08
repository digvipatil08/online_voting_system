<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<h2 class="text-center text-dark mb-4">Admin Panel - Add Candidates</h2>
<div class="card p-4 shadow mx-auto" style="max-width: 500px;">
  <form method="POST" enctype="multipart/form-data">
    <input type="text" name="name" class="form-control mb-3" placeholder="Candidate Name" required>
    <label class="form-label">Upload Symbol:</label>
    <input type="file" name="symbol" class="form-control mb-3" required>
    <button type="submit" name="add" class="btn btn-success w-100">Add Candidate</button>
  </form>
</div>
</body>
</html>

<?php
if(isset($_POST['add'])){
  $name = $_POST['name'];
  $symbol = $_FILES['symbol']['name'];
  $target = "uploads/candidates/" . basename($symbol);
  
  $sql = "INSERT INTO candidates (name, symbol, votes) VALUES ('$name', '$symbol', 0)";
  if($conn->query($sql)){
    move_uploaded_file($_FILES['symbol']['tmp_name'], $target);
    echo "<script>alert('Candidate Added!'); window.location='admin_panel.php';</script>";
  }
}
?>
