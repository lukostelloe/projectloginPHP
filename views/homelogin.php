
<?php 
    // verifies if there's a status in the url
    if (isset($_GET['status'])){
        $status = $_GET['status'];

        if($status === 'error'){ ?>
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Oh snap!</strong> Check your login details.
            </div>
<?php        }
    }


?>



<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectLogin</title>
  </head>
  
  
  <body>
  <div class="container" style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
      <h2>Project Login</h2>
      <form action="process.php" method="post">
              <input type="email" value= "" id="email" name="email" placeholder="email">
              <input type="password" value="" id="pass" name="password" minlength="4" placeholder="password" required>
              <input type="submit" value="login" name="sub" />
      </form>
  </div>
</body>