<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - Online Voting</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <h2 class="text-center text-primary mb-4">Voter Registration</h2>
  <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
    <form action="register.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>
      <input type="text" name="voter_id" class="form-control mb-3" placeholder="Voter ID" required>
      <label class="form-label">Upload Photo:</label>
      <input type="file" name="voter_image" class="form-control mb-3" required>
      <button type="submit" name="register" class="btn btn-success w-100">Register</button>
    </form>
  </div>
</div>
</body>
</html>

<?php
if(isset($_POST['register'])){
  $name = $_POST['name'];
  $voter_id = $_POST['voter_id'];
  $image = $_FILES['voter_image']['name'];
  $target = "uploads/voters/" . basename($image);
  
  $sql = "INSERT INTO voters (name, voter_id, image) VALUES ('$name', '$voter_id', '$image')";
  if($conn->query($sql)){
      move_uploaded_file($_FILES['voter_image']['tmp_name'], $target);
      echo "<script>alert('Registered Successfully!'); window.location='index.php';</script>";
  } else {
      echo "<script>alert('Error: ".$conn->error."');</script>";
  }
}
?>
