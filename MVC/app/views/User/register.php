<div class="container">
<h2>Registration Page</h2>
<form action="" method="POST">
<div class="mb-3">
  <label for="" class="form-label">User Name</label>
  <input type="text" class="form-control" name="UserName" id="" aria-describedby="emailHelpId" required>
  <small id="emailHelpId" class="form-text text-muted"></small>
</div>

    <div class="mb-3">
  <label for="" class="form-label">Email</label>
  <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" required>
  <small id="emailHelpId" class="form-text text-muted"></small>
</div>

    <div class="mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password" class="form-control" name="Pass" id="" placeholder="" required>
    </div>

    <input name="" id="" class="btn btn-primary mb-3" type="submit" value="Register"><br>

    sudah punya akun? <a name="" id=""  href="<?= BASEURL;?>/User/login" role="button">Login</a>
</form></div>

