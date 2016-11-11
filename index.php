<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To do list</title>
	<link rel="stylesheet" href="css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Catamaran|Lobster" rel="stylesheet">
</head>
<body>
	<div id="container">
		<h1 class="main-title center">An amazing to do list!</h1>
		<h2 class="support-title center">Try it!</h2>

		<form class="form" action="scripts/add-task.php" method="get">
			<label for="">Add new to do item</label>
			<input class="form-input" type="text" name="addTask" autofocus />
			<input class="form-button" type="submit" name="submit" value="Add Task!" />
		</form>

		<section class="showTasks">
			<?php 
				$connection = mysqli_connect('localhost', 'root', '', 'todolist');
				$getTask = mysqli_query($connection, 'SELECT * FROM task');

				while ($taskItem = mysqli_fetch_assoc($getTask)) {
			?>
					<ul class="item-task">
						<li><?php echo $taskItem['item']; ?>
							<span class="task-edit">
								<img src="img/settings.svg" alt="">
							</span>

							<span class="task-remove">
								<img src="img/remove.svg" alt="">
							</span>
						</li>
					</ul>
			<?php 
				}
			?>
		</section>
		<script src="bower_components/jQuery/dist/jquery.min.js"></script>
		<script src="scripts/all.js"></script>
	</div>
</body>
</html>