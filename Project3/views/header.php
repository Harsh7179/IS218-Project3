<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project #3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="custom.css">
</head>
<body>
<div>
<nav style="background:#383300; "class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">IS218 Project #3: MVC Pattern </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
	   <?php if(empty($userses)){ ?>
		<li><a href=""><button class="btn btn-sm btn-primary" > When you Register and Login, you will get to view, post, edit, and delete you questions </button></a></li> 
	   <?php } if(!empty($userses)){ ?>
	   <li><a href="index.php?action=display_new_question"><button class="btn btn-sm btn-success" > << Dashboard </button></a></li>
         <li><a href="index.php?action=create_new_question"><button class="btn btn-sm btn-primary" > Post a new Question </button></a></li>
		 <li><a href="logout.php"><button class="btn btn-sm btn-danger" > Sign out </button></a></li>
	<?php } ?>
      </ul>
    </div>
  </div>
</nav>
</div>