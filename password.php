<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/password.css" />
  <title>Help</title>
</head>
<body>
<div class="container">
    <div class="box form-box">
      <header> Trouble with Password :(</header>
      <header2> Don't worry :) Let's solve your puzzled password together</header2>
      <form action="cprocess.php" method="post">
        <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off" required>
        <input type="text" name="subject" class="form-control" placeholder="Club ID" autocomplete="off" required>
        <input type="text" name="message" placeholder="Problem Statement...." autocomplete="off" required>
        <input type="submit" class="btn" name="submit" value="Submit" required>
      </form>
    </div>
  </div> 
</body>
</html>


