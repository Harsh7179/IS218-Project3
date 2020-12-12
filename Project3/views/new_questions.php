   <div class="row">
    <div style="padding-top:40px;" class="col-md-7 mx-auto">
<div class = "panel panel-danger">
   <div class = "panel-heading">
        <b>Recently Added Question</b>
   </div>
   
   <div class = "panel-body">
   <div class = "panel-body text-center">
      This is your newly added question
      </div>
        <table class = "table">
            <tr>
          <th>Title</th>
          <th>Creation Date</th>
		  <th>Body </th>
		  <th>Skills </th>
		  <th>Score</th>
				</tr>
            <?php
         $sqlq=$DB_con->prepare("SELECT * FROM questions WHERE ownerid='$userses' ORDER BY createddate DESC LIMIT 1 ");
	     $sqlq->execute();
			   while ($que=$sqlq->fetch(PDO::FETCH_ASSOC)){
			 ?>
            <tr>
		 <td><?php echo $que['id']; ?></td>
         <td><?php echo $que['title']; ?></td>
         <td><?php echo $que['createddate']; ?></td>
		 <td><?php echo $que['body']; ?></td>
         <td><?php echo $que['skills']; ?></td>
		 <td><?php echo $que['score']; ?></td>
			 <?php } ?>
       </table>
    </div>
      
       </div>
	 <div><br> <a href="index.php?action=display_questions"><center><button class="btn btn-lg btn-success center" > Go To All Questions Page </button></a></div> 
     </div>
	 
   </div>