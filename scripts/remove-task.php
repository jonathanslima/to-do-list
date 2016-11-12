<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>To do list</title>
		<link rel="stylesheet" href="../css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Catamaran|Lobster" rel="stylesheet">
	</head>

	<body>
		<div id="container">
			<h1 class="main-title center">An amazing to do list!</h1>
			<h2 class="support-title center">Try it!</h2>

			<div class="center">
				<?php 

					
					$deleteId 		= $_GET['id'];
					$deleteItem 	= $_GET['item'];

					function removeProduto($connection, $deleteId){
						$query = "delete from `task` where `task`.`id` = $deleteId";
						return mysqli_query($connection, $query);
					}

					removeProduto($connection, $deleteId);

					if(removeProduto($connection, $deleteId)){
				?>
					<p class="alert-success">Task "<?php echo $deleteItem ?>" was successfully deleted!</p>
						
				<?php
					}else{
						$msg = mysqli_error($connection);
				?>
					<p class="alert-failed">Task wasn't deleted :( -> <?php echo $msg ?>!</p>
						
				<?php
					};
				?>	
					<a href="../index.php" class="btn-back">Back</a>
			</div>
		</div>
	</body>
</html>