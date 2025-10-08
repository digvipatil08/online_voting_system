<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vote Here</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <h2 class="text-center text-primary mb-4">Cast Your Vote</h2>
  <div class="row">
    <?php
    $res = $conn->query("SELECT * FROM candidates");
    while($row = $res->fetch_assoc()){
      echo '
      <div class="col-md-4 mb-4">
        <div class="card shadow-lg">
          <img src="uploads/candidates/'.$row['symbol'].'" class="card-img-top" height="200">
          <div class="card-body text-center">
            <h5>'.$row['name'].'</h5>
            <form action="vote.php" method="post">
              <input type="hidden" name="candidate_id" value="'.$row['id'].'">
              <button type="submit" name="vote" class="btn btn-primary mt-2">Vote</button>
            </form>
          </div>
        </div>
      </div>';
    }
    ?>
  </div>
</div>
</body>
</html>

<?php
if(isset($_POST['vote'])){
  $cid = $_POST['candidate_id'];
  $conn->query("UPDATE candidates SET votes = votes + 1 WHERE id=$cid");
  echo "<script>alert('Vote Submitted!'); window.location='result.php';</script>";
}
?>
