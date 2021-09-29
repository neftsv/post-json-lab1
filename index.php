<html>
<head>
  <meta charset="utf-8">
  <title> Note </title>
  <link rel="stylesheet" href="css/style.css?v1" type="text/css">
</head>
<body>
  <form action="actions/json.php" method="post">
    <label for="date">
      <span>Enter date: </span>
      <input id="date" type="date" name="calendar" value="<?php echo date('d-m-Y'); ?>">
    </label>
    <label for="text-field">
      <span>Insert note: </span>
      <textarea id="text-field" name="note"><?php echo "Enter note"; ?></textarea>
    </label>
    <button type="submit">Submit</button>
  </form>
</body>
</html>