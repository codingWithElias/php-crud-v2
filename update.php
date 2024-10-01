<?php 
include "db_conn.php";
include "req/read.php";
if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $user = readById($conn, $id);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD Project - UPDATE</title>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <div class="form-holder">
      	<a href="index.php" class="link">View | Read</a>
      	<form action="req/update.php"
      	      method="POST">
            <?php if (isset($_GET['error'])) { ?>
            	<p class="error">
            		<?=htmlspecialchars($_GET['error'])?>
            	</p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
            	<p class="success">
            		<?=htmlspecialchars($_GET['success'])?>
            	</p>
            <?php } ?>
      	    
      		<label>First Name</label>
      		<input type="text" 
                         name="first_name"
                         value="<?=$user['first_name']?>"><br>

      		<label>Last Name</label>
      		<input type="text" 
                         name="last_name"
                         value="<?=$user['last_name']?>"> <br>

      		<label>Email</label>
      		<input type="text" 
                         name="email"
                         value="<?=$user['email']?>"> <br>

                  <input type="text" 
                         name="id" 
                         value="<?=$user['id']?>"
                         hidden>

            <button type="submit" class="btn-create">Update</button>
      	</form>
      </div>
</body>
</html>
<?php }else {
      header("Location: index.php");
} ?>