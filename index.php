<?php 
include "db_conn.php";
include "req/read.php";
$users = read($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="holder">
	<h2>PHP CRUD Project</h2>
       <a href="create.php" class="link">Create</a>
      <?php if (isset($_GET['success'])) { ?>
     	<p class="success">
     	   <?=htmlspecialchars($_GET['success'])?>
     	</p>
     <?php } ?>
       <?php if ($users != 0) { ?>
        <table>
	<tr>
		<td>ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td>Action</td>
	</tr>	
       <?php	
        foreach ($users as $user) {
       	?>
      
	<tr>
		<td><?=$user['id']?></td>
		<td><?=$user['first_name']?></td>
		<td><?=$user['last_name']?></td>
		<td><?=$user['email']?></td>
		<td>
			<a href="update.php?id=<?=$user['id']?>" class="btn btn-update">Update</a>
			<a href="req/delete.php?id=<?=$user['id']?>" class="btn btn-delete">Delete</a>
		</td>
	</tr>
       
       <?php } ?> 
       </table>
       <?php }else { ?>
       	<p class="error">ERROR: No data found in the Database.</p>
       <?php } ?>
       </div>
</body>
</html>