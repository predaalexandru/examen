<?php

require_once 'dbconfig.php';

if($_POST)
{
    $first_name = mysql_real_escape_string($_POST['first_name']);
    $last_name 	= mysql_real_escape_string($_POST['last_name']);
    $birthday 	= date('Y-m-d H:i:s');
	$gender 	= mysql_real_escape_string($_POST['gender']);
	$country 	= mysql_real_escape_string($_POST['country']);
	$email 	= mysql_real_escape_string($_POST['email']);
	$phone 	= mysql_real_escape_string($_POST['phone']);
	$password 	= mysql_real_escape_string($_POST['password']);
	
	$password 	= password_hash( $password, PASSWORD_BCRYPT, array('cost' => 11));
	
    try
    {
        $stmt = $db_con->prepare("SELECT * FROM users WHERE last_name=:lname");
        $stmt->execute(array(":lname"=>$last_name));
        $count = $stmt->rowCount();
		
        if($count==0){
            $stmt = $db_con->prepare("INSERT INTO users(first_name,last_name,birthday,gender,country,email,phone,password) VALUES(:fname, :lname, :birt, :gen, :country, :email, :phone, :password)");
            $stmt->bindParam(":fname",$first_name);
            $stmt->bindParam(":lname",$last_name);
			$stmt->bindParam(":birt",$birthday);
			$stmt->bindParam(":gen",$gender);
			$stmt->bindParam(":country",$country);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":phone",$phone);
			$stmt->bindParam(":password",$password);

            if($stmt->execute())
            {
                echo "registered";
            }
            else
            {
                echo "Query could not execute !";
            }

        }
        else{

            echo "1"; //  not available
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>