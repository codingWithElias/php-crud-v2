<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD Project - Create</title>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <div class="form-holder">

      	<a href="index.php" class="link">View | Read</a>
             <h3>Create</h3>
      	<form action="req/create.php"
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
      		<input type="text" name="first_name"><br>

      		<label>Last Name</label>
      		<input type="text" name="last_name"> <br>

      		<label>Email</label>
      		<input type="text" name="email"> <br>

            <button type="submit" class="btn-create">Create</button>
      	</form>
      </div>
</body>
</html>