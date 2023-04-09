<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}
  </style>
</head>

<body>
  <form class="container" action="verifyuser.php" method="get">
    <h1>Login</h1>

    <div class="mb-3">
      <label class="form-label">Username</label>
      <input autocomplete="off" type="text" class="form-control" name="username" placeholder="Enter your username">
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input autocomplete="off" type="password" class="form-control" name="password" placeholder="Enter your password">
    </div>

    <div class="mb-3">
      <input autocomplete="off" type="submit" class="btn btn-primary" value="Login">
    </div>
   </form>
   <div class="container">
     <p>Don't have an account? <a href="index.php">Sign up</a></p>
   </div>
</body>
</html>
