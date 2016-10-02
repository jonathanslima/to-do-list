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
		<script src="scripts/all.js"></script>
	</div>
</body>
</html>