<?php
function create_new_question($e,$userses,$d,$title,$body,$skills){
	global $DB_con;			
		$add = $DB_con->prepare("INSERT INTO questions(owneremail, ownerid, createddate, title, body, skills)VALUES(:oe, :oi, :cd, :t, :b, :s)");
		$add->bindparam(":oe",$e);
		$add->bindparam(":oi",$userses);
		$add->bindparam(":cd",$d);
		$add->bindparam(":t",$title);
		$add->bindparam(":b",$body);
		$add->bindparam(":s",$skills);
		$add->execute();
		$add->closeCursor();
         return $add;		
}

function check_useremail($userses) {
    global $DB_con;
		  $stmt =$DB_con->prepare("SELECT * FROM accounts WHERE id='$userses' ");
		  $stmt->execute();
		  $userch=$stmt->fetch(PDO::FETCH_ASSOC);
		  $stmt->closeCursor();
		return $userch;
}
	
function all_user_questions($userses)
	  {
	    global $DB_con;
         $sqlq=$DB_con->prepare("SELECT * FROM questions WHERE ownerid='$userses' ORDER BY createddate DESC ");
	     $sqlq->execute();
		 return $sqlq;
 } 
// WHERE ownerid='$userses' 
function latest_quesddtion($userses)
     {
	    global $DB_con;
         $sqlq=$DB_con->prepare("SELECT * FROM questions WHERE ownerid='$userses' ORDER BY createddate DESC LIMIT 1 ");
	     $sqlq->execute();
		 return $sqlq;
   }
 function view_edit_question($qid)
     {
	global $DB_con;
	$sqledit=$DB_con->prepare("SELECT * FROM questions WHERE id='$qid' ");
	$sqledit->execute();
	$edit = $sqledit->fetch();
	return $edit;
 }    
   
function update_question($qid,$title,$body,$skills,$score)
	{
		global $DB_con;
	$upd = $DB_con->prepare("UPDATE questions SET title=:t, body=:b, skills=:s,score=:sc WHERE id=:id ");
	$upd->bindparam(":id",$qid);
	$upd->bindparam(":t",$title);
	$upd->bindparam(":b",$body);
	$upd->bindparam(":s",$skills);
	$upd->bindparam(":sc",$score);
	$upd->execute();
   return $upd;
  }
  
function delete_question($qid)
	 {
	  global $DB_con;
	 $query = 'DELETE FROM questions
				  WHERE id = :que_id';
    $statement = $DB_con->prepare($query);
    $statement->bindValue(':que_id', $qid);
    $statement->execute();
    $statement->closeCursor();
  }
?>