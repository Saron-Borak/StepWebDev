<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
  <?php include('header.php') ?>
    <div class="login-container">
      <form class="login-form">
        <h2>LOGIN PAGE</h2>
        <p>Save time and leave the groceries to us.</p>
        <div class="form-group">
          <label for="username">Email</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" class="login-btn">LOG IN</button>
      </form>
    </div>
    <?php include('footer.php') ?>
  </body>
</html>
