<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f8f8;
      font-family: Arial, sans-serif;
    }
    img {
      margin-top: 100px;
      width : 20rem;
      margin-left: 9rem;
    }

    .login-container {
      margin-top: 40px;
      max-width: 400px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }

    .login-container h2 {
      text-align: left;
      margin: 20px 0;
    }

    .login-form .form-group {
      margin-bottom: 20px;
    }

    .login-form label {
      font-weight: bold;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .login-form button[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #4caf50;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
      margin-bottom: 4rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <img src="asset/img/logo-horizontal-b-g-k.png" alt="Logo" class="text-center">
        <div class="login-container">
          <h2>Login</h2>
          <form class="login-form" method="post" action="http://localhost/ruangbelajarfasilkom/login/logins">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" placeholder="Masukkan Username" id="username" name="username">
              <?php echo form_error('username'); ?>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" placeholder="Masukkan Password" name="password">
              <?php echo form_error('password'); ?>
            </div>
            <?php $message = $this->session->flashdata('message');
            if (isset($message)) {
                echo '<div class="alert alert-danger">' . $message . '</div>';
            }?>
            <?php echo $this->session->flashdata('login_error'); ?>            <button type="submit">Masuk</button>
            
            <?php form_close(); ?>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>