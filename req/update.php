<?php 

if (isset($_POST['first_name']) &&
	isset($_POST['last_name'])  &&
	isset($_POST['id'])  &&
	isset($_POST['email'])
   ) {
	include "../db_conn.php";

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$id = $_POST['id'];


	if (empty($first_name) || 
		empty($last_name)  || 
		empty($id)         || 
		empty($email)) {
		$em = "Please fill out all fields";
	   header("Location: ../update.php?error=$em&id=$id");
	}else {
        $sql = "UPDATE users SET first_name=?, last_name=?, email=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email, $id]);

        $sm = "Successfully updated";
	    header("Location: ../update.php?success=$sm&id=$id");
	}
}