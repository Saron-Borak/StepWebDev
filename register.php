<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTER PAGE</title>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <?php include('header.php') ?>
    <div class="login-container">
      <form class="login-form">
        <h2>REGISTER PAGE</h2>
        <p>Save time and leave the groceries to us.</p>
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <input type="text" id="fullname" name="fullname" required />
          <label for="username">Email</label>
          <input type="text" id="username" name="username" required />
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
          <label for="confirmpassword">Confirm Password</label>
          <input
            type="password"
            id="password"
            name="confirmpassword"
            required
          />
        </div>
        <button type="submit" class="register-btn">REGISTER</button>
      </form>
    </div>
    <?php include('footer.php') ?>
  </body>
</html>
