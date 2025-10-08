<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Results</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
  <h2 class="text-center text-success mb-4">Election Results</h2>
  <table class="table table-bordered table-striped text-center bg-white shadow">
    <tr>
      <th>Candidate</th>
      <th>Symbol</th>
      <th>Votes</th>
    </tr>
    <?php
    $res = $conn->query("SELECT * FROM candidates ORDER BY votes DESC");
    while($row = $res->fetch_assoc()){
      echo "<tr>
        <td>".$row['name']."</td>
        <td><img src='uploads/candidates/".$row['symbol']."' width='50'></td>
        <td>".$row['votes']."</td>
      </tr>";
    }
    ?>
  </table>
</body>
</html>
