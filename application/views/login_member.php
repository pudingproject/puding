<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    Silahkan Login!! Ini laman Ujicoba, member login!!
    <div>
      <?php
        $msg	= $this->session->flashdata('msg');
        if(isset($msg)){
          echo $msg;
        }
      ?>
      <?php echo form_open('login/member'); ?>
      <form>
        <input type="text" name="username" placeholder="username"value="">
        <input type="password" name="password" placeholder="password"value="">
        <input type="submit" name="login" value="Login">
      </form>
      <?php echo form_close(); ?>
    </div>
  </body>
</html>
