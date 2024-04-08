<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-page</title>
  <?php
  include 'header.php';
  ?>
</head>
<body>
  <h1 class="text-warning font-monospace my-3 text-center">Trending Products</h1>

  <?php
  include 'Config.php';
  $Record = mysqli_query($con,"select * from tblproduct");
  while($row=mysqli_fetch_array($Record)){

 echo "

<div class='card' style='width: 18rem;'>
  <img src='../admin/product/$row[PImage]' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>$row[PName]</h5>
    <p class='card-text'>RS:$row[PPrice]</p>
    <p></p>

  </div>
</div>
";
} 
?>
</body>
</html>