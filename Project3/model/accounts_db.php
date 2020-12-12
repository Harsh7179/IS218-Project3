<?php 
function reg_user($email, $fname, $lname, $bd, $pass){
	global $DB_con;
	try{
		$reg = $DB_con->prepare("INSERT INTO accounts(email,fname,lname,birthday, password)VALUES(:e, :f, :l, :b, :p)");
		$reg->bindparam(":e",$email);
		$reg->bindparam(":f",$fname);
		$reg->bindparam(":l",$lname);
		$reg->bindparam(":b",$bd);
		$reg->bindparam(":p",$pass);
		$reg->execute();
	       return $reg;
	     }
	    catch(PDOException $e)
      {
	echo $e->getMessage(); 
	}				
}

function check_user($email) {
    global $DB_con;
   $stmt =$DB_con->prepare("SELECT * FROM accounts WHERE email='$email' ");
    $stmt->execute();
     $userc=$stmt->fetch();
		  $stmt->closeCursor();
		return $userc;
}
			  		  
 function get_user($userses) {
    global $DB_con;
    $query = 'SELECT * FROM accounts WHERE id= :u_id';
    $statement = $DB_con->prepare($query);
    $statement->bindValue(":u_id", $userses);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
     return $user;
 }
?>