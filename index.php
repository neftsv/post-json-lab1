<html>
	<head>
		<meta charset="utf-8">
		<title> Note </title>
		<link rel="stylesheet" href="Style.css" type="text/css">
	</head>
    <body>
        <div>
			<div>
				<form action="server.php" method="post">
					<p class="a">Виберіть дату: <input type="date" name="calendar" value="<?php echo date('Y-m-d');?>"></p>
				</form>
			</div>
        </div>
    </body>
</html>