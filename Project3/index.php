<?php
require('model/database.php');
require('model/accounts_db.php');
require('model/questions_db.php');
//// log the user into the account
$action = filter_input(INPUT_POST, 'action');
  if(empty($action)){
   $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
       include 'views/login.php';
     }
   
   }else if ($action == 'show_register') {
      include('register.php');  
      }
	  
  else if($action == 'reg_user') {
    $email =trim($_POST['email']);
	$fname=trim($_POST['fname']);
	$lname=trim($_POST['lname']);
	$bd=trim($_POST['birthday']);
    $pass=trim($_POST['password']);
	   if(empty($email)){ $err="please provide your Email!"; 
		    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $err="Enter a valid email address";
			}else if (empty($fname)){ $err="please provide your First Name!";
			}else if (empty($lname)){ $err="please provide your Last Name!";
			}else if (empty($bd)){ $err="please provide your Birthday!";
			}else if (empty($pass)){ $err="please provide your Passoword!"; }
	     if(empty($err)){
			   reg_user($email,$fname,$lname,$bd,$pass);
				   ?>
			  <script type="text/javascript">
			  alert("Your Account have been created Successifully. You will be redirected to the Login page in a Second");		  
			</script>
			  <?php
				header("refresh: 1");
		}
  }
  
  if($action == 'log_user'){
	//if(isset($_POST['login'])){
	$email =trim($_POST['email']);
    $pass = trim($_POST['password']);
	
	if(empty($email)){$err="Please provide your Email!";
		}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {$err="Enter a valid email address";
		}else if (empty($pass)){$err="Please provide your passoword!";}
	      if(empty($err)){
               $loguser= check_user($email);
			   if($pass==$loguser['password']){
			  $_SESSION['userid'] = $loguser['id'];
			  $userses=$_SESSION['userid'];
			  header("Location: index.php?action=display_new_question");
			  }else{
			$err="Incorrect Login information !";
		  }
	  }
  }
else if($action == 'create_new_question'){
		include('post-question.php');
	}
	
else if($action == 'post_question'){
		
	if(isset($_POST['submitq'])) {
		$userses=$_SESSION['userid'];  
		$title =trim($_POST['title']);
		$skills=trim($_POST['skills']);
		$body=trim($_POST['body']);
        $ee= check_useremail($userses);
		$e=$ee['email'];
		$d= date("Y-m-d h:i:s");

	if (empty($title)){$err="Please provide your Title!";
		}else if (empty($skills)){$err="Please provide Skills!";
		}else if (empty($body)){$err="Please add the Body!";}
		if(empty($err)){
			create_new_question($e,$userses,$d,$title,$body,$skills);
		 header("Location: index.php?action=display_new_question", 3); 
	}
  }
}

 else if ($action == 'display_questions'){
	 include('questions.php');
    } 
	
 else if ($action == 'display_new_question'){
	 include('dashboard.php');
   }
   
 else if ($action == 'display_edit_question'){
	 include('show_edit_questions.php');
 }	
 
 else if ($action == 'edit_question'){
   if (isset($_POST['updateq'])) {
		$title =trim($_POST['title']);
		$skills=trim($_POST['skills']);
		$body=trim($_POST['body']);
		$score=trim($_POST['score']);
		$qid=$_GET['id'];

	if (empty($title)){$err="Please provide your Title!";
		}else if (empty($skills)){$err="Please provide Skills!";
		}else if (empty($body)){$err="Please add the Body!";}
		}else if (empty($score)){$err="Please add the Score!";}
		if(empty($err)){
			   update_question($qid,$title,$body,$skills,$score);
			header("Location: index.php?action=display_questions", 3);
	}
  }
   else if ($action == 'delete_question'){
   include('show_delete_question.php');
  }
  
 else if ($action == 'del_question'){
	 $qid=$_GET['id'];
	 delete_question($qid);
	 header("Location: index.php?action=display_questions", 3);
}
?>