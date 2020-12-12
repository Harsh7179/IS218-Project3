 <?php include 'views/header.php'; ?>
 <div style="padding-top:50px;" class="container">
      <div style=" background: #grey;"class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Login to Your Account
            </h1>
            <h2 class="wv-heading--subtitle">
               Get to post your Question and also view you previously posted questions
			   <img src="images/login-img.png" width="80" height="60"alt="Login">
			  <div> <a href="register.php"><button class="btn btn-md btn-warning" > Click here to Register </button></a></div> 
            </h2>
         </div>
      </div>
      <div class="row">
         <div style="padding-top:40px; background: #ccbf73;" class="col-md-4 mx-auto">
            <p class="alert alert-info" > * Ensure that all details are valid! </p>
			<div class="myform form">
               <form action="" method="post" name="login">
			     <input type="hidden" name="action" value="log_user">
			        <?php
						if (isset($err)) {
							?>
						 <center> <p class="alert alert-danger"><?php  echo $err; ?> </p></center>
							<?php
						} 
					?>
                  <div class="form-group">
                     <input type="email" name="email" type="email" class="form-control my-input" id="name" placeholder="Your Email Address">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" type="password" class="form-control my-input" id="email" placeholder="Your Password">
                  </div>
                  <div class="text-center ">
                     <button type="submit" name="login" class=" btn btn-block btn-primary send-button tx-tfm">Login Now</button>
					   <p class="alert alert-sucess"> You will be redirected to the Dashboard!</p>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <?php include 'views/footer.php'; ?>