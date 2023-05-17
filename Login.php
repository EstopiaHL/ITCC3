<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Laundry Palace - Login</title>
      <link rel="stylesheet" href="CSS_FrontEnd.css">
   </head>
   <body>
      <div class="container">
         <div class="login-form">
            <h1>Login</h1>
            <form action="LoginEngine.php" method="post">
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" placeholder="Enter Username" required>
               </div>
               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" placeholder="Enter Password" required>
               </div>
               <div class="form-group">
                  <input type="submit" value="Login">
               </div>
            </form>
         </div>
      </div>
   </body>
</html>