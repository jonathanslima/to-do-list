<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="task">
		<?php 
			//Function Insert task
			function insertTask($task, $connection){
				//Insert item into table
				$query 				= "insert into items (task) values ('{$task}')";
				return mysqli_query($connection, $query);
			};

			//Receive item from form
			$task = $_GET["addTask"];
			
			//Connect to database
			$connection = mysqli_connect('localhost', 'root', '', 'todolist');

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
</body>
</html>