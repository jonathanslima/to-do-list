<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>An Amazing to do list</title>
	<link rel="stylesheet" href="../css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Catamaran|Lobster" rel="stylesheet">
</head>
<body>
	<div id="container">
		<h1 class="main-title center">An amazing to do list!</h1>
		<h2 class="support-title center">Try it!</h2>

		<div class="task">
			<?php 
				//Receive item from form
				$task = $_GET["addTask"];
				//Connect to database
				$connection = mysqli_connect('localhost', 'root', '', 'todolist');

				//Function Insert task
				function insertTask($task, $connection){
					//Insert item into table
					$query 				= "insert into task (item) values ('{$task}')";
					return mysqli_query($connection, $query);
				};


				if(insertTask($task, $connection)){
			?>
				<p class="alert-success">Task "<?php echo $task ?>" was successfully saved!</p>
				
			<?php
				}else{
					$msg = mysqli_error($connection);
			?>
				<p class="alert-failed">Task wasn't saved :( -> <?php echo $msg ?>!</p>
				
			<?php
				};
			?>	

			<a href="../index.php" class="btn-back">Back</a>
		</div>
	</div>

</body>
</html>