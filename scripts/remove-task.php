<!-- Connect to database -->
<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>To do list - Removing task</title>
			<!-- Stylesheet 
		====================================================================== -->
		<link rel="stylesheet" href="../css/all.css">
		
		<!-- Fontes 
		====================================================================== -->
		<link href="https://fonts.googleapis.com/css?family=Catamaran|Lobster" rel="stylesheet">

	  <!-- Mobile Specific Metas
		====================================================================== -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<div id="container">
			<h1 class="main-title center">An amazing to do list!</h1>
			<h2 class="support-title center">Try it!</h2>

			<div class="center">
				<?php 

					// Get values received from url parameters
					$deleteId 		= $_GET['id'];
					$deleteItem 	= $_GET['item'];

					// Creating function to remove product
					function removeItem($connection, $deleteId){

						// query to delete a specific id
						$query = "delete from `task` where `task`.`id` = $deleteId";
						return mysqli_query($connection, $query);
					}

					// Remove the item 
					removeItem($connection, $deleteId);

					// If the item was deleted, show the success message
					if(removeItem($connection, $deleteId)){
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
					<hr>
					<footer>
						<p>@<span class="date">1986</span> - Todo List made with <span class="heart"><img src="../img/heart.svg" alt=""></span> by Jonathan</p>
					</footer>
			</div>
		</div>
		<script src="bower_components/jQuery/dist/jquery.min.js"></script>
		<script src="scripts/all.js"></script>
	</body>
</html>