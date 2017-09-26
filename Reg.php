<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reg</title>
  <link rel="stylesheet" href="Regstyle.css">
</head>
<body>
  <div class="header">
    <h1>Reg3</h1>
  </div>

  <form method="post" action="Reg.php">
    <div class="input-group">
      <label>Employee ID:</label>
      <input type="text" name="employee id">
    </div>
    <div class="input-group">
      <label>Email:</label>
      <input type="text" name="email">
    </div>
    <div class="input-group">
      <label>Password:</label>
      <input type="password" name="password1">
    </div>
    <div class="input-group">
      <label>Confirm Password:</label>
      <input type="password" name="password2">
    </div>
    <div class="input-group">
      <button type="submit" name="register" class="buttn">Register</button>
    </div>
    <p>
        Already registered? <a href="log.php"> Sign in</a>
    </p>
  </form>
</body>
</html>
