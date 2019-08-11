<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?=$title?></title>
    <link rel="stylesheet" href="<?=base_url()?>assets/login/css/login.css" media="screen" type="text/css" />
</head>
<body>
  <span href="#" class="button" id="toggle-login">Register New Admin</span>
<div id="login">
  <div id="triangle"></div>
  <h1>Register</h1>
  <form>
    <input type="text" id="uname" placeholder="Username" />
    <input type="password" id="passwd" placeholder="Password" />
    <input type="password" id="passwd_validation" placeholder="Repeat Password" />
    <input type="submit" value="Log in" />
  </form>
</div>
  <script src="<?=base_url('assets/')?>login/js/login.js"></script>
</body>
</html>
