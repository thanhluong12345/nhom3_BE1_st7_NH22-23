<?php
  session_start();

  require_once "../lib/config.php";
  require ROOT_MODEL_PATH."/db.php";
  require ROOT_MODEL_PATH."/user.php";
  require ROOT_ADMIN."/models/user_admin.php";
  require ROOT_LIB_PATH."/validator.php";

  $mo_admin = new UserAdmin();
  $mo_admin->checkLogin( ROOT_ADMIN_URL."/pages/dashboard/index.php", true);

  $errors = array();
  if( isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $lib_validator = new Validator();
    

    $input = array(
      "username" => $username,
      "password" => $password,
    );
    
    $rules = array(
        "username" => array(
            _IS_NULL
        ),
        "password" => array(
            _IS_NULL
        )
    );
    $lib_validator->validate( $input, $rules );
    if( $lib_validator->errors ) {
      $errors = $errors + $lib_validator->errors;
    }

    if( empty($errors) ) {
      $check_login = $mo_admin->login( $username, $password );
      if( !$check_login["status"] ) {
        $errors["error_common"] = $check_login["error"];
      }
    }
    
    if( $errors ) {
        $_SESSION["admin_errors"] = $errors;
        header("Location: ".ROOT_ADMIN_URL."/login.php");
        exit;
    }

    header( "Location: ".ROOT_ADMIN_URL."/pages/dashboard/index.php" );
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?=ROOT_ADMIN_URL."/assets/css/common.css"?>">
  <link rel="stylesheet" href="<?=ROOT_ADMIN_URL."/assets/css/login.css"?>">
  <title>Sign in</title>
</head>

<body>
  <div class="login-page" style="background: url(<?=ROOT_ADMIN_URL."/assets/img/bg-login.jpg"?>) no-repeat; background-position:center;">
    <div class="container">
      <div class="container-forms">
        <div class="container-form">
          <div class="form-item log-in">
            <div class="table">
              <div class="table-cell">
                <p class="error"><?=$_SESSION["admin_errors"]["error_common"]??""?></p>
                <form action="<?=ROOT_ADMIN_URL."/login.php"?>" method="post" >
                  <input name="username" placeholder="Username" type="text" />
                  <p class="error"><?=$_SESSION["admin_errors"]["username"]??""?></p>
                  <input name="password" placeholder="Password" type="password" />
                  <p class="error"><?=$_SESSION["admin_errors"]["password"]??""?></p>
                  <button type="submit" name="login" class="btn">
                    Log in
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php unset( $_SESSION["admin_errors"] ) ?>
  <script src="form.js"></script>
</body>

</html>