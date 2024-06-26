<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- font awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto mt-5 bg-white shadow font-monospace border border-info">
        <p class = "text-warning fs-3 fw-bold my-3 text-center">
          User Register
        </p>
        <form action="insert.php" method="POST">
          <div class="mb-3">
            <label for="">UserName:</label>
            <input type="text" name="name" placeholder="Enter User Name" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">UserEmail:</label>
            <input type="email" name="email" placeholder="Enter User Email" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">UserNumber:</label>
            <input type="number" name="number" placeholder="Enter User number" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">UserPassword:</label>
            <input type="password" name="password" placeholder="Enter User password" class="form-control">
          </div>
          <div class="mb-3">
          <button name="submit" class="w-100  fs-4 text-white bg-warning">REGISTER</button>
          </div>
          <div class="mb-3">
          <button class="w-100  fs-4 text-white bg-warning"><a href="login.php" class="text-decoration-none text-white">ALREADY ACCOUNT</a>  </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>