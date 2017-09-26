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
    <h1>log1</h1>
  </div>

  <form method="post" action="log.php">
   <div class="input-group">
      <label>Employee ID</label>
      <input type="text" name="employee id">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password1">
    </div>
    <div class="input-group">
      <button type="submit" name="Login" class="buttn">Login</button>
    </div>
    <p>
        Not yet registered? <a href="Reg.php"> Sign up</a>
    </p>
  </form>
</body>
</html>
