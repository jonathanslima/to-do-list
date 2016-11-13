<!-- Connect to database -->
<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To do list - Adding task</title>
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

		<div class="task">
			<?php 
				//Receive item from form
				$task = $_GET["addTask"];

				//Function Insert task
				function insertTask($task, $connection){
					//Insert item into table
					$query 				= "insert into task (item) values ('{$task}')";
					return mysqli_query($connection, $query);
				};

				// If statement true show success message
				if(insertTask($task, $connection)){
			?>
				<p class="alert-success">Task "<?php echo $task ?>" was successfully saved!</p>
				
			<?php
				// Else, show failed message
				}else{
					$msg = mysqli_error($connection);
			?>
				<p class="alert-failed">Task wasn't saved :( -> <?php echo $msg ?>!</p>
				
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