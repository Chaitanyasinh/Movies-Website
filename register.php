<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.min.css">
    <link href="/media/examples/link-element-example.css" rel="stylesheet">
</head>
<body>

        <h1>Do Registration Yourself</h1>

    <form method="post" action="save-registration.php">
        <div class="form-group">
        <label for= "username" class="col-sm-2">Username: </label>
        <input name= "username" id="username" required type="email" />
        </div>
        <div class="form-group">
        <label for= "password" class="col-sm-2">Password: </label>
        <input name= "password" id="password" required  type= "password" />
        </div>
        <div class="form-group">
        <label for= "confirm" class="col-sm-2">Confirm Password: </label>
        <input name= "confirm" id="confirm" required type="password" />
        </div>
        <button class="btn btn-success col-sm-offset-2">Register</button>
    </form>

</body>
</html>