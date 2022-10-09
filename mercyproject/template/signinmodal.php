 <!-- Sign in / sign up modal-->
 
 <?php
include "db.php";
$report= $class = "";

#form check
if ($_SERVER["REQUEST_METHOD"] == "POST"){

#check sign in form
	if(isset($_POST["submit"])){

	$email = $_POST["email"];
	$pasword = $_POST["password"];

	$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pasword."'";

  $result = mysqli_query($conn,$sql);

  if($result){
  $row = mysqli_fetch_assoc($result);

  if($row["usertype"] === "admin"){
	$_SESSION["email"] = $email;
	$_SESSION["usertype"] = "admin";


    header("location:admin.php");
}
  elseif ($row["usertype"] === null) {

	$_SESSION["email"] = $email;
	$_SESSION["usertype"] = null;
  header("location:index.php");
}

  else {
	$report = "Incorrect email & password ...Please check the input";
  $class = "alert-danger";
  echo "<script>
  </script>";
}

}
else {
	$report=  "Can not validate the request at the moment";
  $class = "alert-danger";
}
	
}
}


?>
 
 
 
 <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
              
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="on" novalidate id="signin-tab" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            
            <div class="<?php echo $class; ?>"><?php  echo $report; ?></div>
              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" name="email" id="si-email" placeholder="mercy@gmail.com.com"  required>
                
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" name="password" type="password"  id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" name="submit" type="submit">Sign in</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>