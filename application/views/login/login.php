<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?=$title?></title>
    <link rel="stylesheet" href="<?=base_url()?>assets/login/css/login.css" media="screen" type="text/css" />
</head>
<body>
  <span href="#" class="button" id="toggle-login">Log in</span>
<div id="login">
  <div id="triangle"></div>
  <h1>Log in</h1>
  <form>
    <input type="email" placeholder="Email" />
    <input type="password" placeholder="Password" />
    <input type="submit" value="Log in" />
  </form>
</div>
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src="<?=base_url('assets/')?>login/js/login.js"></script>
</body>
</html>
