<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"  crossorigin="anonymous">

    <title>Admin Login</title>

  </head>
  <body>
    
  <div class="auth">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-5">SIGN IN</h3>
                        <form action="proses-login.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <input name="username" type="text" placeholder="Username" class="form-control">    
                            </div>
                            <div class="form-group mb-3">
                                <input name="password" type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group my-4">
                                    <button  class="btn btn-primary form-control">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
  </div>
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>