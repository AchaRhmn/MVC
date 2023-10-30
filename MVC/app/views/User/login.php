<form method="POST" action="">
<div class="container align-items-center">
<h2>Login Page</h2>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="text"
    class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">

</div>
<div class="mb-3">
  <label for="pass" class="form-label">Password</label>
  <input type="password"
    class="form-control" name="Pass" id="Pass" aria-describedby="helpId" placeholder="">

</div>
<button type="submit" class="btn btn-primary mb-3">Submit</button><br>

tidak punya akun? <a name="" id=""  href="<?= BASEURL;?>/User/register" role="button">Register</a>

</div>
</form>