
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signing.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin">
    <img class="mb-4" src="img/lock.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal" id="ted">Please Login</h1>

    <label  class="sr-only">ID NUMBER:</label>
    <input type="text" class="form-control" placeholder="STUDENT ID" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="PASSWORD" required>
    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="window.location.href='view.php'"  formtarget="_blank">Sign in</button>

</form>
</body>
</html>
