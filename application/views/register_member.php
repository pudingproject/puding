<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    <div>
      <?php echo form_open('register/member'); ?>
      <form>
        <input type="text" name="username" value="" placeholder="username"><br/>
        <input type="email" name="email" value=""placeholder="email"><br/>
        <input type="password" name="password" value="" placeholder="password"><br/>
        <input type="password" name="password2" value="" placeholder="confirm password"><br/>
        <input type="submit" name="daftar" value="Daftar">
      </form>
      <?php echo form_close(); ?>
    </div>
  </body>
</html>
