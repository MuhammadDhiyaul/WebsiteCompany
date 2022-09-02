<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>SignIn</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet">

    <!-- Logo Title Bar -->
    <link rel="icon" href="../assets/img/logo-sgs.png" type="image/x-icon">

  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="prosesLogin.php" method="post">
    <img class="mb-4" src="../assets/img/logo-sgs.png" alt="" width="125">
    <!-- <h1 class="h3 mb-3 fw-normal">Please sign in</h1> -->

    <div class="form-floating mb-2">
      <input type="text" class="form-control" id="floatingInput" name="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login" value="Proses">Sign in</button>
    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
  </form>
</main>


    
  </body>
</html>
