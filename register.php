<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/style.css" />
  <title>Register Here</title>
</head>

<body>
  <div class="container">
    <div class="box form-box">

      <?php

      include("php/config.php");


      
      if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];


        $checkExistingUser = "SELECT Email FROM users WHERE Email='$email'";
        $result = $conn->query($checkExistingUser);

        if ($result->num_rows > 0) {
          echo "<div class='messagew'>
          <p>This email already exist, Please try another one</p>
          </div> <br>";
          echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";

        } else {
          $sql = "INSERT INTO users (Username,Email,Age,Password) VALUES ('$username','$email','$age','$password')";
          if ($conn->query($sql) === TRUE) {

            echo "<div class='messager'>
              <p>Registration Successfull!!!</p>
              </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
          $conn->close();

          } 
          else {
            echo "Error: " . $conn->error;
          }

        }

      } else {

        ?>

        <header>Sign Up</header>
        <header2>We're Here For You! Be The Admin Of Your Event Calendar
          Today</header2>
        <form action="" method="post">
          <div class="field input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="off" required>
          </div>

          <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
          </div>

          <div class="field input">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" autocomplete="off" required>
          </div>

          <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off" required>
          </div>

          <div class="field">
            <input type="submit" class="btn" name="submit" value="Register" required>
          </div>

          <div class="links">
            Already have an account? <a href="login.php">Sign In</a>
          </div>
        </form>
      </div>
      
    <?php } ?>
  </div>
</body>

</html>