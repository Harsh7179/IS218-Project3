<?php 
$userses=$_SESSION['userid'];
?>
<?php include 'views/header.php'; ?>
 <div style="padding-top:50px;" class="container">
  <div style=" background: #grey;"class="col-md-3 mx-auto text-center">
	 <div class="header-title">
	<input type="hidden" name="action" value="log_user">
		<h1 class="wv-heading--title">
		   Welcome to Your Account
		</h1>
		<h2 class="wv-heading--subtitle">
				<?php 
		  $user=get_user($userses);  
		  ?> 
			<h3> <b><?php echo $user['fname']; ?> <?php echo $user['lname']; ?> <b></h3>   
			<div><br> <a href="index.php?action=create_new_question"><button class="btn btn-md btn-warning" > Click here to Add a new Question </button></a></div> 
			</h2>
         </div>
      </div>
<?php include 'views/new_questions.php'; ?>
 </div>
<?php include 'views/footer.php'; ?>