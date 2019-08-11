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
      <input type="text" id="username" placeholder="Username (MIN 5 |MAX 50 char)" />
      <span id="username_result"></span>
      <input type="password" id="passwd" placeholder="Password (MIN 5|MAX 50 char)" />
      <input type="password" id="passwd_validation" placeholder="Repeat Password (MIN 5|MAX 50 char)" />
      <input type="submit" value="Reg" />
    </form>
  </div>
  <script src="<?=base_url('assets/')?>login/js/login.js"></script>
  <script src="<?=base_url('assets/')?>login/js/jquery.js"></script>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  $('#username').keyup(function(){
    var username = $('#username').val();
    if(username != ''){
      $.ajax({
        url: "<?php echo base_url(); ?>home/check_new_user",
        method: "POST",
        data: {username:username},
        success: function(data){
          $('#username_result').html(data);
        }
      });
    }
  });
});
</script>
