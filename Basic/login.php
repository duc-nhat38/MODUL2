<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form {
            width: 300px;
            height: 300px;
            border: 2px solid black;
            padding: 20px;
        }
        div input {
            width: 250px;
            height: 30px;
            margin-top: 20px;
        }
        .submit {
            width: 100px;
            height: 30px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
        
        <form action="" method="get">
        <h2>Login</h2>
            <div>
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Name">
            </div>
            <div>
                <label for="pass"></label>
                <input type="password" id="pass" name="password" placeholder="Password" pl>
            </div>
            <input type="submit" name="Login" class="submit">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
              $userName = $_GET['name'];
              $passWord = $_GET['password'];
              if ($userName === 'admin') {
                  echo('Welcome ' . $userName. ' to website');
              } else {
                  echo('Login error.');
              }
        }
        ?>
</body>

</html>