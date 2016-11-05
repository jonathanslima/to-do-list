<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
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
			<p class="alert-success">Task: <?php echo $task ?> - was successfully saved!</p>
			
		<?php
			}else{
				$msg = mysqli_error($connection);
		?>
			<p class="alert-failed">Task: wasn't saved :( -> <?php echo $msg ?>!</p>
			
		<?php
			};
		?>	

	</div>

	<a href="../index.php">Voltar</a>
</body>
</html>