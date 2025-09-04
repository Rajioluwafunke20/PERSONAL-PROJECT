<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="Css/login2.css">
</head>
<body>
  <div class="form-container">
    <h2>Register</h2>
    <form action="controller/register.php" method="post">
      <label>Full Name:</label>
      <input type="text" name="name" required placeholder="Enter full name">

      <label>Email:</label>
      <input type="email" name="email" required placeholder="Enter email">
      
       <label>phone:</label>
      <input type="Phone" name="PhoneNumber" required placeholder="Enter phone Number">
      
      <label>Password:</label>
      <input type="password" name="password" required placeholder="Create password">
      
      <button type="submit">Register</button> 

      <p class="bottom-text">Already have an account? 
       <a href="login.php"> Login here</a>
      </p>
    </form>
  </div>
</body>
</html>
