<!-- Connect to database -->
<?php include 'scripts/connection.php' ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>To do list</title>
			<!-- Stylesheet 
		====================================================================== -->
		<link rel="stylesheet" href="css/all.css">
		
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

			<form class="form" action="scripts/add-task.php" method="get">
				<span class="erro-msg">You write a msg with more than 50 characters.</span>
				<input class="form-input" type="text" name="addTask" autofocus required autofocus placeholder="Add new to do item"/>
				<input class="form-button" type="submit" name="submit" value="Add Task!" />
			</form>

			<section class="showTasks">
				<ul class="item-task">
					<?php 
						$getTask	= mysqli_query($connection, 'SELECT * FROM task');
						$getId		= mysqli_query($connection, 'SELECT * FROM task WHERE id');

						while ($taskItem  = mysqli_fetch_assoc($getTask)) {
							
							$taskId 		= mysqli_fetch_assoc($getId);
					?>
					
					<li><?php echo $taskItem['item']; ?>
						<span class="task-edit">
							<img src="img/settings.svg" alt="edit item">
						</span>

						<span class="task-remove">
							<a href="scripts/remove-task.php?id=<?php echo $taskId['id'] ?>&item=<?php echo $taskItem['item'] ?>">	<img src="img/remove.svg" alt="remove item">
							</a>
						</span>
					</li>
					
					<?php 
						}
					?>
				</ul>
				
				<footer>
					<p>@<span class="date">1986</span> - Todo List made with <span class="heart"><img src="img/heart.svg" alt=""></span> by Jonathan</p>
				</footer>
			</section>
		</div>

			<script src="bower_components/jQuery/dist/jquery.min.js"></script>
			<script src="scripts/all.js"></script>
	</body>
</html>