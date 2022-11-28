<?php
if (isset($_POST["submit"])) {
  if ($_POST["username"] == "Natasha" &&  $_POST["password"] == "12345") {
    header("location: Latihan5e(2).php");
    exit;
  } else {
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <style type="text/css">
    div {
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      width: 400px;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }

    .isi {
      padding-top: 40px;
      padding-bottom: 40px;
      border: 2px solid black;
    }
  </style>
</head>

<body>

  <h1 style="text-align: center; font-family:Georgia, 'Times New Roman', Times, serif ">Login</h1>
  <div>
    <div class="isi">
      <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic;">Username
            atau Password salah!!</p>
        <?php endif; ?>

        <button type="submit" name="submit" style="background-color: blue; color: beige; border-radius:5px">Log In</button>
      </form>
    </div>

  </div>

</body>

</html>